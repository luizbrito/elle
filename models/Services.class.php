<?php

class Services
{
    private $service;
    private $commentaire;
    private $id;

    public function __construct($id, $service, $commentaire)
    {
        echo "Instanciation.......";
        $this->setId($id);
        $this->setEmail($email);
        $this->setIdentifiant($identifiant);
    }

    public function __construct($service, $commentaire)
    {
        echo "Instanciation.......";
        $this->setService($service);
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

    public function setService($newservice)
    {   
        if (is_string($newservice)) {
            $this->service = $newservice;
        } 
        else {
            trigger_error(E_USER_ERROR);
        }
    }

    public function getService()
    {
        return $this->service;
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