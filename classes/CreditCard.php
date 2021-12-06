<?php

class CreditCard
{
  protected $creditCardNumber;
  protected $cvv;
  protected $expireDate;

  function __construct($creditCardNumber, $cvv, $expireDate)
  {
    $this->setCardNumber($creditCardNumber);
    $this->setCardCvv($cvv);
    $this->setCardExpireDate($expireDate);
  }

  public function setCardNumber($creditCardNumber)
  {
    $this->creditCardNumber = $creditCardNumber;
  }

  public function setCardCvv($cvv)
  {
    $this->cvv = $cvv;
  }

  public function setCardExpireDate($expireDate)
  {
    $this->expireDate = $expireDate;
  }
}
