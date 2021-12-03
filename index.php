<?php

require_once "data/products.php";
require_once "data/users.php";

require "classes/User.php";
require "classes/Product.php";
require "classes/PremiumUser.php";
require "classes/products/FoodProduct.php";
require "classes/products/FurnitureProduct.php";
require "classes/products/ElectronicsProduct.php";
require "classes/products/SelfcareProduct.php";

$users = [];
$products = [];


foreach ($usersData as $user) {
  if ($user["isPremium"]) {
    $user = new PremiumUser($user);
  } else {
    $user = new User($user);
  }
  array_push($users, $user);
}


foreach ($productsData as $key => $product) {
  switch ($product["category"]) {
    case "Food":
      $product = new FoodProduct($product, $key);
      break;
    case "Electronics":
      $product = new ElectronicsProduct($product, $key);
      break;
    case "Furniture":
      $product = new FurnitureProduct($product, $key);
      break;
    case "Selfcare":
      $product = new SelfcareProduct($product, $key);
      break;
  }
  array_push($products, $product);
}

echo "<h2>Users</h2>";
var_dump($users);

echo "<h2>Products</h2>";
var_dump($products);
