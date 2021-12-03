<?php

class Product
{
  protected $id;
  protected $name;
  protected $brand;
  protected $category;
  protected $price;

  function __construct($_productArray, $_key)
  {
    $this->setProductId($_key);
    $this->setProductName($_productArray["name"]);
    $this->setProductBrand($_productArray["brand"]);
    $this->setProductCategory($_productArray["category"]);
    $this->setProductPrice($_productArray["price"]);
  }


  public function setProductId($_key)
  {
    $this->id = $_key;
  }
  public function setProductName(string $name)
  {
    $this->name = $name;
  }


  public function setProductBrand(string $brand)
  {
    $this->brand = $brand;
  }


  public function setProductCategory(string $category)
  {
    $this->category = $category;
  }

  public function setProductPrice(int $price)
  {
    $this->price = $price;
  }
}
