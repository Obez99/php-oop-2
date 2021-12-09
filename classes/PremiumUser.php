<?php

require_once __DIR__ . "/User.php";
class PremiumUser extends User
{

  protected $premiumDiscount = 10;

  function __construct($_userArray)
  {
    parent::__construct($_userArray);
  }
}
