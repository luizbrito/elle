<?php

class Prix
{
    private $prix;
    private $commentaire;
    private $id;

    public function __construct($id, $prix, $commentaire)
    {
        echo "Instanciation.......";
        $this->setId($id);
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
    }

    public function __construct($prix, $commentaire)
    {
        echo "Instanciation.......";
        $this->setprix($prix);
        $this->setIdentifiant($identifiant);
        $this->setCommentaire($commentaire);
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

    public function setPrix($newprix)
    {   
        if (is_numeric($newprix)) {
            $this->prix = $newprix;
        } 
        else {
            trigger_error("C'est un numéro", E_USER_ERROR);
        }
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setCommentaire($newcommentaire)
    {
        if (is_string($newcommentaire)) {
            $this->commentaire = $newcommentaire;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getCommentaire()
    {
        return $this->commentaire;
    }
}