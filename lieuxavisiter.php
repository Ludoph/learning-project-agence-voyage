<?php

class Circuit{
    private $nomLieu;
    private $ville;
    private $pays;
    private $description;
    private $prixVisite;

    function __construct($nomLieu, $ville, $pays, $description, $prixVisite){
        $this->nomLieux = $nomLieu;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->description = $description;
        $this->prixVisite = $prixVisite;
    }
};