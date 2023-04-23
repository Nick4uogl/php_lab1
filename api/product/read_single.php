<?php
header('Acces-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Product.php';

$database = Database::getInstance();
$db = $database->getConnection();

$product = new Product($db);

$product->id = isset($_GET['id']) ? $_GET['id'] : die();

$product->read_single();

$post_arr = array(
    'id' => $product->id,
    'name' => $product->name,
    'image' => $product->image,
    'price' => $product->price,
    'discoint' => $product->discount,
);

print_r(json_encode($post_arr));
