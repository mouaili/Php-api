<?php

class Users
{

    //variables
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected int $age;

    public function __construct($firstName, $lastName, $email, $age)
    {
        $this->setDataUser($firstName, $lastName, $age);
        $this->setAddressEmail($email);
    }


    public function setDataUser($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function setAddressEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new Exception('L\'adresse émail n\'est pas valide.');
        }
    }

    public function getDataUser()
    {
        return [
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "email" => $this->email,
            "age" => $this->age
        ];
    }

    // public function toConnectToDatabase()
    // {
    //     return "Je me m'appelle <strong style='color:red; font-size:20px'>" . $this->firstName . "</strong>, je suis connecté à votre site Internet.";
    // }
}


$member = new Users("Jhon", "Becker", "jhonbecker@gmail.com", 25);
$data = $member->getDataUser();

var_dump($data);
