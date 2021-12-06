<?php

require_once "data/products.php";
require_once "data/users.php";

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
  var_dump($product->getSingleProduct(4));
}




echo "<h2>Users</h2>";
var_dump($users);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equZiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>