<?php

require_once "data/products.php";
require_once "data/users.php";

require "classes/User.php";
require "classes/Product.php";
require "classes/PremiumUser.php";

echo "<h2>Users</h2>";
foreach ($users as $user) {
  if ($user["isPremium"]) {
    $user = new PremiumUser($user);
  } else {
    $user = new User($user);
  }
  var_dump($user);
}

echo "<h2>Products</h2>";
foreach ($products as $product) {
  $product = new Product($product);
  var_dump($product);
}
