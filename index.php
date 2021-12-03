<?php

require_once "data/products.php";
require_once "data/users.php";

require "classes/User.php";

foreach ($users as $user) {
  $user = new User($user);
  var_dump($user);
}
