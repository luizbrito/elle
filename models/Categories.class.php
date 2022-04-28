<?php

class Categories
{
    private $categorie;
    private $commentaire;
    private $id;

    public function __construct($id, $categorie, $commentaire)
    {
        echo "Instanciation.......";
        $this->setId($id);
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
    }

    public function __construct($categorie, $commentaire)
    {
        echo "Instanciation.......";
        $this->setCategorie($categorie);
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

    public function setCategorie($newCategorie)
    {   
        if (is_string($newcategorie)) {
            $this->categorie = $newcategorie;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getCagorie()
    {
        return $this->categorie;
    }

    public function setcommentaire($newcommentaire)
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