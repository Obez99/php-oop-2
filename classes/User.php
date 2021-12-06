<?php

class User
{
  protected $name;
  protected $surname;
  protected $age;
  protected $email;
  protected $password;

  function __construct($_userArray)
  {
    $this->setUserName($_userArray["name"]);
    $this->setUserSurname($_userArray["surname"]);
    $this->setUserAge($_userArray["age"]);
    $this->setUserEmail($_userArray["email"]);
    $this->setUserPassword($_userArray["password"]);
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
}
