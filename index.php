<?php

require_once "data/products.php";
require_once "data/users.php";

require_once "classes/Product.php";
require_once "classes/PremiumUser.php";
require_once "classes/CreditCard.php";


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

echo "<body style='background-color:black; color:white'>";


echo "<h2>Users</h2>";
$users[0]->addToCart($products[2]->getSingleProduct());
$users[0]->addToCart($products[1]->getSingleProduct());
$users[0]->addCreditCard(40252123023791, 493, "06/2023");
$users[0]->addCreditCard(40252123023791, 493, "06/2023");
var_dump($users[0]->getUserData());
var_dump($users);
var_dump($products);

echo "</body>";
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