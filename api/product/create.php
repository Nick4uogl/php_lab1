<?php
header('Acces-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Authorization, X-Requested-Width');

include_once '../../config/Database.php';
include_once '../../models/Product.php';

$database = Database::getInstance();
$db = $database->getConnection();

$product = new Product($db);

$data = json_decode(file_get_contents("php://input"));

$product->name = $data->name;
$product->image = $data->image;
$product->price = $data->price;
$product->discount = $data->discount;

if ($product->create()) {
    echo json_encode(
        array('message' => 'Post Created')
    );
} else {
    echo json_encode(
        array('message' => 'Post not created')
    );
}
