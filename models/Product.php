<?php
class Product
{
    private $conn;
    private $table = 'products';

    public $id;
    public $name;
    public $price;
    public $image;
    public $discount;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = 'SELECT id, name, price, image, discount FROM ' . $this->table;

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function read_single()
    {
        $query = 'SELECT id, name, price, image, discount FROM ' . $this->table . ' WHERE id = ? LIMIT 0,1';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row['name'];
        $this->image = $row['image'];
        $this->price = $row['price'];
        $this->discount = $row['discount'];
    }

    public function create()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET name = :name, price = :price, image = :image, discount = :discount';
        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->discount = htmlspecialchars(strip_tags($this->discount));
        $this->price = htmlspecialchars(strip_tags($this->price));

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':discount', $this->discount);
        $stmt->bindParam(':price', $this->price);

        if ($stmt->execute()) {
            return true;
        }

        printf('Error: %s.\n', $stmt->error);

        return false;
    }
}
