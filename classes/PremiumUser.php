<?php

class PremiumUser extends User
{
  protected $premiumDiscount;


  public function setPremiumDiscount($_premiumDiscount)
  {
    $this->premiumDiscount = $_premiumDiscount;
  }
}
