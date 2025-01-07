<?php

/*
 *
 *
 *Le mot "final" clôture l'héritage entre la classe mère et la classe fille,
 *cela permert à la classe fille de bien fermer la marche
 *
 *
 *IDEM POUR LES FONCTIONS, le mot "final", indiquera la fonction ne pourra pas être redefinir dans une classe fille
 *
 *
 ***/
class Author extends Users
{


    private int $note;
    private string $opinion;

    public function __construct($firtName, $lastName, $email, $age, $note, $opinion)
    {
        Parent::__construct($firtName, $lastName, $email, $age);
        $this->setNoteValue($note);
        $this->setOpinionValue($opinion);
    }

    public function setNoteValue($note)
    {
        if (is_int($note) && !empty($note)) $this->note = $note;
    }

    public function getNoteValue()
    {
        return $this->note;
    }

    public function setOpinionValue($opinion)
    {
        if (is_string($opinion) && !empty($opinion)) $this->opinion = $opinion;
    }

    public function getOpinionValue()
    {
        return $this->opinion;
    }

    public function displayAuthorInfos()
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function toConnectToDatabase()
    {
        return "Je me m'appelle <strong style='color:red; font-size:20px'>" . $this->firstName . "</strong>, je suis l'auteur de votre site Internet.";
    }
}




$author = new Author("Carole", "Beckerin", "carolebeckerin@gmail.com", 29, 15, "Je suis l'organisateur du tableau de bord du site.");
echo "<br/>";
echo "<br/>";
echo $author->toConnectToDatabase();
echo "<br/>";

echo "<pre>";
var_dump($author);
echo "</pre>";



final class FirstAuthor extends Author
{
    private $text;

    public function __construct($firtName, $lastName, $email, $age, $note, $opinion, $text)
    {
        Parent::__construct($firtName, $lastName, $email, $age, $note, $opinion);
        $this->setTextValue($text);
    }

    public function setTextValue($text)
    {
        if (is_string($text) && !empty($text)) $this->text = $text;
    }

    public function getTextValue()
    {
        return $this->text;
    }
}

$firtAuthor = new FirstAuthor("Franc", "Bauer", "francbauer@sfr.fr", 27,  15, "Je suis de droite.", "Je suis amateur de football");

echo "<br/>";
echo $firtAuthor->toConnectToDatabase();
echo "<br/>";
echo "<br/>";
echo "<br/>";

var_dump($firtAuthor);
