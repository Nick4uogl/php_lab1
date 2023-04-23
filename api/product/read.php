<?php
header('Acces-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Headers:Role,Origin , Content-Type');

include_once '../../config/Database.php';
include_once '../../models/Product.php';

$database = Database::getInstance();
$db = $database->getConnection();

$post = new Product($db);

$result = $post->read();

$num = $result->rowCount();

if ($num > 0) {
    $products_arr = array();
    $products_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $product_item = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'discount' => $discount,
        );
        array_push($products_arr['data'], $product_item);
    }

    echo json_encode($products_arr);
} else {
    echo json_encode(array('message' => 'No Posts Found'));
}
