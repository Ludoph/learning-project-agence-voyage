<?php
class Client {
    private $id;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $tel;
    private $mail;

    function __construct($id, $nom, $prenom, $date_naissance, $tel, $mail){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->tel = $tel;
        $this->mail = $mail;
    }
    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function setNom($nom){
        $this->nom = $nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    function getDateNaissance(){
        return $this->date_naissance;
    }
    function setDateNaissance($date_naissance){
        $this->date_naissance = $date_naissance;
    }
    function getTel(){
        return $this->tel;
    }
    function setTel($tel){
        $this->tel = $tel;
    }
    function getMail(){
        return $this->mail;
    }
    function setMail($mail){
        $this->mail = $mail;
    }
    

    static function getEmployeById($id){
        $bdd = new PDO('mysql:dbname=agence_voyage;host=localhost','root', 'root');
        $query = $bdd->query('SELECT * FROM client WHERE id = ' . $id);
        $unClient = $query->fetch();
        return new Client($unClient['id'], $unClient['nom'], $unClient['prenom'], $unClient['date_naissance'], $unClient['tel'], $unClient['mail']);
    }

    static function updateClient($client){
        $bdd = new PDO('mysql:dbname=agence_voyage;host=localhost','root', 'root');
        $query = $bdd->prepare('UPDATE client SET nom = :nom, prenom = :prenom, date_naisance = :date_naissance, tel = :tel, mail= :mail WHERE id = :id');
        $query->execute(array('nom' => $client->getNom(), 'prenom' => $client->getPrenom(), 'date_naissance' => $client->getDateNaissance(), 'tel' => $client->getTel(), 'mail' => $client->getMail));
    }
}

?>