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

//Valid Credit Card
$users[0]->addCreditCard(4025212302379121, 493, "06/2023");

//Invalid Credit Card
$users[0]->addCreditCard(40252123023791, 93, "062023");



var_dump($users[0]->getUserData());

echo "<h2> Users </h2>";
var_dump($users);

echo "<h2>Products</h2>";
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