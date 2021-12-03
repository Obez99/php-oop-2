<?php

require_once "data/products.php";
require_once "data/users.php";

require "classes/User.php";
require "classes/Product.php";
require "classes/PremiumUser.php";

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
  $product = new Product($product, $key);
  array_push($products, $product);
}

echo "<h2>Users</h2>";
var_dump($users);

echo "<h2>Products</h2>";
var_dump($products);
