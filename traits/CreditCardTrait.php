<?php
trait CreditCardTrait
{
  protected $creditCards;


  public function addCreditCard($number, $cvv, $expire)
  {
    try {
      $creditCard = new CreditCard($number, $cvv, $expire);
      $this->creditCards[] = $creditCard;
    } catch (Exception $e) {
      echo $e->getMessage() . " for user " . $this->name;
    }
  }
}
