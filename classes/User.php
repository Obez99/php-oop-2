<?php

require_once __DIR__ . "/../traits/CreditCardTrait.php";

class User
{
  protected $name;
  private $surname;
  private $age;
  private $email;
  private $password;
  protected $cart;

  use CreditCardTrait;


  function __construct($_userArray)
  {
    $this->setUserName($_userArray["name"]);
    $this->setUserSurname($_userArray["surname"]);
    $this->setUserAge($_userArray["age"]);
    $this->setUserEmail($_userArray["email"]);
    $this->setUserPassword($_userArray["password"]);
    $this->setUserCart($_userArray["cart"]);
  }



  public function setUserName(string $name)
  {
    $this->name = $name;
  }



  public function setUserSurname(string $surname)
  {
    $this->surname = $surname;
  }


  public function setUserAge(string $age)
  {
    $this->age = $age;
  }


  public function setUserEmail(string $email)
  {
    $this->email = $email;
  }

  public function getUserEmail()
  {
    return $this->email;
  }


  public function setUserPassword(string $password)
  {
    $this->password = $password;
  }

  public function setUserCart($cart)
  {
    $this->cart = $cart;
  }

  public function getUserData()
  {
    return $this;
  }

  public function addToCart($item)
  {
    array_push($this->cart, $item);
  }
  public function getCartItems()
  {
    return $this->cart;
  }
}
