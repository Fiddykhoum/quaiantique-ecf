<?php

class Cart
{
  public string $productName;
  public int $quantity;
  public float $productPrice;

  public function __construct( string $productName, int $quantity, float $productPrice)
  {
    $this->productName = $productName;
    $this->quantity = $quantity;
  }
  public function getQuantity(): int
  {
    return $this->quantity;
  }
  public function getproductPrice(): float
  {
    return $this->productPrice;
  }

  public function setTotalPrice(float $price): void
  {
    $this->productPrice = $price;
  }

  public function addTVA(float $tva): void
  {
    $this->productPrice += $this->productPrice * ($tva/100);
  }

  public function discount(float $discount): void
  {
    $this->productPrice -= $this->productPrice * ($discount/100);
  }
}

