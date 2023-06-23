<?php

class Circuit{
    private $id;
    private $description;
    private $paysDepart;
    private $villeDepart;
    private $dateDdepart;
    private $paysArrivee;
    private $villeArrivee;
    private $duree;
    private $prixInscription;
    private $nbEtape;

    function __construct($id, $description, $paysDepart, $villeDepart, $dateDdepart, $paysArrivee, $villeArrivee, $duree, $prixInscription, $nbEtape){
        $this->id = $id;
        $this->description = $description;
        $this->paysDepart = $paysDepart;
        $this->villeDepart = $villeDepart;
        $this->dateDepart = $dateDdepart;
        $this->paysArrivee = $paysArrivee;
        $this->villeArrivee = $villeArrivee;
        $this->duree = $duree;
        $this->prixInscription = $prixInscription;
        $this->nbEtape = $nbEtape;
    }

    
};