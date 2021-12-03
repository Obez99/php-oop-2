<?php

class User
{
  protected $name;
  protected $surname;
  protected $email;
  protected $password;

  function __construct($_userArray)
  {
    $this->setName($_userArray["name"]);
    $this->setSurname($_userArray["surname"]);
    $this->setEmail($_userArray["email"]);
    $this->setPassword($_userArray["password"]);
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }


  public function getSurname()
  {
    return $this->surname;
  }

  public function setSurname($surname)
  {
    $this->surname = $surname;
  }


  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }


  public function getPassword()
  {
    return $this->password;
  }

  public function setPAssword($password)
  {
    $this->password = $password;
  }
}
