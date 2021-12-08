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
      return;
    }
    $this->creditCardNumber = $creditCardNumber;
  }

  public function setCardCvv($cvv)
  {
    if (strlen($cvv) != 3 || !is_int($cvv)) {
      return;
    }
    $this->cvv = $cvv;
  }

  public function setCardExpireDate($expireDate)
  {
    if (!strpos($expireDate, "/") && strlen($expireDate) != 7) {
      return;
    }
    $this->expireDate = $expireDate;
  }
}
