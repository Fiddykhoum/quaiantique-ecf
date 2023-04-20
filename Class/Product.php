<?php

class Product
{
  public string $productName;
  public string $imageAdress;
  public string $productDescription;
  public float $price;


  public function __construct(string $productName, string $imageAdress, string $productDescription, float $price)
  {
    $this->productName = $productName;
    $this->imageAdress = $imageAdress;
    $this->productDescription = $productDescription;
    $this->price = $price;
  }

  public function getPrice(): float
  {
    return $this->price;
  }
}