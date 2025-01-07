<?php

class City
{
    //variables:
    public string $name;
    public string $region;
    public int $department;
    public int $numberOfInhabitants;

    public  function __construct($name, $region, $department, $numberOfInhabitants)
    {

        $this->setAttributesCity($name, $region, $department, $numberOfInhabitants);
    }

    public function setAttributesCity($name, $region, $department, $numberOfInhabitants)
    {
        if (
            is_string($name) && !empty($name) &&
            is_string($region) && !empty($region) &&
            is_int($department) && $department > 0 &&
            is_int($numberOfInhabitants) && $numberOfInhabitants > 0
        ) {

            $this->name = $name;
            $this->region = $region;
            $this->department = $department;
            $this->numberOfInhabitants = $numberOfInhabitants;
        } else {
            throw new InvalidArgumentException("Invalid arguments provided for City attributes.");
        }
    }

    public function getTheDataCity()
    {
        return [
            "name" => $this->name,
            "region" => $this->region,
            "departement" => $this->department,
            "numberOfInhabitants" => $this->numberOfInhabitants,

        ];
    }


    public function displayTheCityName()
    {
        $city =  "La ville de " . $this->name . " est située au département n°" . $this->department . " dans la région de " . $this->region . ", le nombre de ses habitants est de " . $this->numberOfInhabitants . " habitants apprauximativement.";

        echo  $city;
    }
}


$newTown = new City("Grignan", "La Drôme", 26, 2569);
$newTown->getTheDataCity();
echo "<br/>";
$newTown->displayTheCityName();

echo "<pre>";
print_r($newTown);
echo "</pre>";
