<?php

class Person
{

    //variables:
    private string $name;
    private int $age;


    public function __construct($name, $age,)
    {
        $value = 0;
        $this->setPersonInformation($name, $age);
        $this->setAgePerson($age, $value);
    }

    public function setPersonInformation($name, $age)
    {
        if (is_string($name) && is_int($age)) {
            $this->name = $name;
            $this->age  = $age;
        } else {
            throw new Exception("There is a lot of mistake.");
        }
    }

    public function setAgePerson($age, $value)
    {
        if (is_int($age)) {
            return $this->age = $age + $value;
        }
    }
    public function getTheNameOfPerson()
    {
        return "My name is " . $this->name . ".";
    }
    public function getTheAgeOfPerson()
    {
        return $this->age . " years old.";
    }
}

$person = new Person("Carole Becker", 32);
echo "<br/>";
echo $person->getTheNameOfPerson();
echo "<br/>";
echo $person->getTheAgeOfPerson();
echo "<br/>";
$person->setAgePerson(32, 1);
echo "Next year : " .  $person->getTheAgeOfPerson();
