<?php
class Cliente{
    protected $nome;
    protected $cognome;
    protected $indirizzo;
    protected $telefono;
    protected $email;
    private $carta;
    private $scadenza;
    

    function __construct($_nome,$_cognome,$_indirizzo,$_telefono,$_email,$_carta,$_scadenza){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo= $_indirizzo;
        $this->telefono = $_telefono;
        $this->email = $_email;
        $this->carta = $_carta;
        $this->scadenza = $_scadenza;
        
    }
    public function getNome(){
        return $this->nome;
    
    }
    public function setNome($_nome) {
        $this->nome = $_nome;
    }

    public function getCognome(){
        return $this->cognome;
    
    }
    public function setCognome($_cognome) {
        $this->cognome = $_cognome;
    }
    public function getIndirizzo(){
        return $this->indirizzo;
    
    }
    public function setIndirizzo($_indirizzo) {
        $this->indirizzo = $_indirizzo;
    }
    public function getTelefono(){
        return $this->telefono;
    
    }
    public function setTelefono($_telefono) {
        $this->telefono = $_telefono;
    }
    public function getEmail(){
        return $this->email;
    
    }
    public function setEmail($_email) {
        if(!strpos($_email,'@')){
            throw new Exception('Email non valida! ');
        }  $this->email = $_email;
    }

    public function getCarta(){
        return $this->carta;
    
    }
    public function setCarta($_carta) {
        $this->carta = $_carta;

    }
    public function getScadenza(){
        return $this->scadenza;

    }
    public function setScadenza($_scadenza) {
        $this->$scadenza = $_scadenza;
    }

}   

