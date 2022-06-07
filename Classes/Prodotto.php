<?php
class Prodotto{
    protected $nome;
    protected $tipologia;
    protected $prezzo;


function __construct($_nome,$_tipologia,$_prezzo){
    $this->nome = $_nome;
    $this->tipologia = $_tipologia;
    $this->prezzo = $_prezzo;
}
public function getNome(){
    return $this->nome;

}
public function setNome($_nome) {
    $this->nome = $_nome;
}

public function getTipologia(){
    return $this->tipologia;
}
public function setTipologia($_tipologia){
    $this->tipologia= $_tipologia;
}

public function getPrezzo(){
    return $this->prezzo;
}

public function setPrezzo($_prezzo) {
    $this->prezzo = $_prezzo;
}
}


?>