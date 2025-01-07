<?php

class Users
{

    //variables
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected int $age;

    public int $note;

    //constants
    const NOTE_LOW_REF = 5;
    const NOTE_HIGH_REF = 10;

    public function __construct($firstName, $lastName, $email, $age, $note)
    {
        $this->setDataUser($firstName, $lastName, $age);
        $this->setAddressEmail($email);
        $this->setNoteValue($note);
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

    public function setNoteValue($note)
    {
        $this->note = $note;
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

    public function getNoteValue()
    {
        return $this->note;
    }

    public function degreeOfInvolvement() //degrès d'implication
    {
        switch ($this->getNoteValue()) {
            case $this->getNoteValue() < self::NOTE_LOW_REF:
                # code...
                echo "Vous note est en dessous de la moyenne.";
                break;
            case $this->getNoteValue() == self::NOTE_LOW_REF:
                # code...
                echo "Vous venez d'attribuer la note moyenne.";
                break;
            case $this->getNoteValue() < self::NOTE_HIGH_REF:
                # code...
                echo "C'est une très bonne note.";
                break;
            default:
                # code...
                return null;
                break;
        }
    }
}


$member = new Users("Jhon", "Becker", "jhonbecker@gmail.com", 25, 11);



$member->getDataUser();
$member->setNoteValue(7);
$member->getNoteValue();
echo $member->degreeOfInvolvement();
