<?php

require_once __DIR__ . "/User.php";
class PremiumUser extends User
{
  protected $premiumDiscount;

  function __construct($_userArray, $premiumDiscount = 0)
  {
    parent::__construct($_userArray);
    $this->setPremiumDiscount(10);
  }

  public function setPremiumDiscount($_premiumDiscount)
  {
    $this->premiumDiscount = $_premiumDiscount;
  }
}
