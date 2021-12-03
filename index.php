<?php

require_once "data/products.php";
require_once "data/users.php";

require "classes/User.php";

$users[0] = new User($users[0]);
echo $users[0]->getName();
var_dump($users[0]);
