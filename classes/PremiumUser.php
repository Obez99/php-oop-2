<?php

require_once __DIR__ . "/User.php";
class PremiumUser extends User
{

  function __construct($_userArray)
  {
    parent::__construct($_userArray);
    $this->setPremiumDiscount();
  }

  public function setPremiumDiscount()
  {
  }
}
