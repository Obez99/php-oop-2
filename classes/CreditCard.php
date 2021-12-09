<?php

class CreditCard
{
  protected $creditCardNumber = "Invalid Credit Card Number";
  protected $cvv = "Invalid CVV";
  protected $expireDate = "Invalid Expire Date";

  function __construct($creditCardNumber, $cvv, $expireDate)
  {
    $this->setCardNumber($creditCardNumber);
    $this->setCardCvv($cvv);
    $this->setCardExpireDate($expireDate);
  }

  public function setCardNumber($creditCardNumber)
  {
    if (strlen($creditCardNumber) != 16 || !is_int($creditCardNumber)) {
      throw new Exception("Invalid Credit Card Number");
    }

    $this->creditCardNumber = $creditCardNumber;
  }

  public function setCardCvv($cvv)
  {
    if (strlen($cvv) != 3 || !is_int($cvv)) {
      throw new Exception("Invalid CVV Number");
    }
    $this->cvv = $cvv;
  }

  public function setCardExpireDate($expireDate)
  {
    if (!strpos($expireDate, "/") && strlen($expireDate) != 7) {
      throw new Exception("Invalid Card Expiration Date");
    }
    $this->expireDate = $expireDate;
  }
}
