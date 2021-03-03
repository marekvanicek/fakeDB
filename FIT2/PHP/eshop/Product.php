<?php
class Product {
  private static $issuedIds = 0;
  private $id;
  private $name;
  private $price;

  public function __construct() {
    $this->id = ++static::$issuedIds;
  }
  public function getId() {
    return $this->id;
  }
  public function getName() {
    return $this->name;
  }
  public function getPrice() {
    return $this->price;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function setPrice($amount) {
    $this->price = $amount;
  }
}
?>
