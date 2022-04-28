<?php

class Prestataire
{
    private $email;
    private $identifiant;
    private $motdepasse;
    private $id;

    public function __construct($id, $email, $identifiant, $motdepasse)
    {
        echo "Instanciation.......";
        $this->setId($id);
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
        $this->setMotDePasse($motdepasse);
    }

    public function __construct($email, $identifiant, $motdepasse)
    {
        echo "Instanciation.......";
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
        $this->setMotDePasse($motdepasse);
    }

    public function setId($newid)
    {   
        if (is_string($newid)) {
            $this->id = $newrid;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPrenom($newPrenom)
    {   
        if (is_string($newPrenom) && iconv_strlen($newPrenom) <= 20) {
            $this->prenom = $newPrenom;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setIdentifiant($newidentifiant)
    {   
        if (is_string($newidentifiant)) {
            $this->prenom = $newPrenom;
        } 
        else {
            trigger_error("Ce n'est pas une chaine de caractère ou elle contient plus de 20 caractères", E_USER_ERROR);
        }
    }

    public function getIdentifient()
    {
        return $this->identifiant;
    }

    public function setMotDePasse($newmotdepasse)
    {
        if (is-is_numeric($newmotdepasse) && iconv_strlen($newmotdepasse)) {
            $this->motdepasse = $newmotdepasse;
        } 
        else {
            trigger_error("Ce n'est pas un chiffre", E_USER_ERROR);
        }
    }

    public function getmotdepasse()
    {
        return $this->motdepasse;
    }
}