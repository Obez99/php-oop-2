<?php

class User
{
  protected $name;
  protected $surname;
  protected $email;
  protected $password;

  function __construct($_userArray)
  {
    $this->setUserName($_userArray["name"]);
    $this->setUserSurname($_userArray["surname"]);
    $this->setUserEmail($_userArray["email"]);
    $this->setUserPassword($_userArray["password"]);
  }

  public function getUserName()
  {
    return $this->name;
  }

  public function setUserName(string $name)
  {
    $this->name = $name;
  }


  public function getUserSurname()
  {
    return $this->surname;
  }

  public function setUserSurname(string $surname)
  {
    $this->surname = $surname;
  }


  public function getUserEmail()
  {
    return $this->email;
  }

  public function setUserEmail(string $email)
  {
    $this->email = $email;
  }


  public function getUserPassword()
  {
    return $this->password;
  }

  public function setUserPassword(string $password)
  {
    $this->password = $password;
  }
}
