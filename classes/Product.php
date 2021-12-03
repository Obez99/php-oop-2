<?php

class Product
{
  protected $name;
  protected $brand;
  protected $category;
  protected $price;

  function __construct($_productArray)
  {
    $this->setProductName($_productArray["name"]);
    $this->setProductBrand($_productArray["brand"]);
    $this->setProductCategory($_productArray["category"]);
    $this->setProductPrice($_productArray["price"]);
  }

  public function getProductName()
  {
    return $this->name;
  }

  public function setProductName(string $name)
  {
    $this->name = $name;
  }
  public function getProductBrand()
  {
    return $this->brand;
  }

  public function setProductBrand(string $brand)
  {
    $this->brand = $brand;
  }

  public function getProductCategory()
  {
    return $this->category;
  }

  public function setProductCategory(string $category)
  {
    $this->category = $category;
  }

  public function getProductPrice()
  {
    return $this->price;
  }

  public function setProductPrice(int $price)
  {
    $this->price = $price;
  }
}
