<?php

class Auto
{
    //varia stringbles
    private string $name;
    private string $color;
    private int $size;
    private int $price;
    private int $year;

    public function __construct($name, $color, $size, $price, $year)
    {
        $this->setFirstAuto($name, $color, $size, $price, $year);
    }

    public function setFirstAuto($name, $color, $size, $price, $year)
    {

        if (is_string($name) && is_string($color) && is_int($size) && is_int($price) && is_int($year)) {

            $this->name  = $name;
            $this->color = $color;
            $this->size  = $size;
            $this->price = $price;
            $this->year = $year;
        } else {

            echo "There s a mistake";
        }
    }

    public function getFirstAuto()
    {
        return [
            "name"  => $this->name,
            "color" => $this->color,
            "size"  => $this->size,
            "price" => $this->price,
            "year" => $this->year,
        ];
    }

    public function displayTheSeletedAuto()
    {
        var_dump($this->getFirstAuto());
        echo "<br/>";
        return "Le véhicule sélectionné est de marque " . $this->getFirstAuto()['name'];
    }
}


$auto = new Auto("Peugeot", "Grey shark", 254, 15369, 2023);
//$auto->setFirstAuto("Peugeot", "Grey shark", 254, 15369);
$auto->getFirstAuto();

echo $auto->displayTheSeletedAuto();

echo "<pre>";
echo print_r($auto);
echo "</pre>";
