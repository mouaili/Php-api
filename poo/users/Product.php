<?php

class Product
{

    //variables
    private string $name;
    private string $reference;
    private int $price;
    private string $origin;

    private static $discount = 18;


    public function __construct($name, $reference, $price, $origin)
    {
        $this->setAttributesProduct($name, $reference, $price, $origin);
    }


    public function setAttributesProduct($name, $reference, $price, $origin)
    {
        if (
            is_string($name) && !empty($name) &&
            is_string($reference) && !empty($reference) &&
            is_int($price) && !empty($price) &&
            is_string($origin) && !empty($origin)
        ) {
            $this->name = $name;
            $this->reference = $reference;
            $this->price = $price;
            $this->origin = $origin;
        } else {
            throw new InvalidArgumentException("Error Processing Request");
        }
    }


    public function getDataProduct()
    {
        return [
            "name" => $this->name,
            "reference" => $this->reference,
            "price" => $this->price,
            "origin" => $this->origin,
        ];
    }

    public static function setDiscountValue($discount)
    {
        self::$discount = $discount;
    }

    public static function getDiscountValue()
    {
        return self::$discount;
    }

    public function getNewPriceOfProduct()
    {
        return $this->price * (1 - self::$discount / 100);
    }

    public function displayProduct() {}
}

$newPorduct1 = new Product("Appareil Photos", "AZ586ERF", 225, "FRANCE");
$newPorduct2 = new Product("Appareil Photos", "AZ85re96", 369, "Belgique");

echo Product::setDiscountValue(15);
echo $newPorduct1->getNewPriceOfProduct();
echo "<br/>";

echo $newPorduct2->getNewPriceOfProduct();
echo "<br/>";
echo Product::getDiscountValue();
