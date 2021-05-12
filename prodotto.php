<?php 

class Prodotto{
    private $nome;
    private $prezzo;
    private $descrizione;
    private $urlImg;


    public function __construct($_nome, $_prezzo, $_descrizione, $_urlImg){
        $this->setNome($_nome);
        $this->setPrezzo($_prezzo);
        $this->setDescrizione($_descrizione);
        $this->setUrlImg($_urlImg);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $_nome){
        $this->nome = $_nome;
    }


    public function getPrezzo(){
        return $this->prezzo;
    }

    public function setPrezzo(float $_prezzo){
        $this->prezzo = $_prezzo;
    }


    public function getDescrizione(){
        return $this->descrizione;
    }

    public function setDescrizione(string $_descrizione){
        $this->descrizione = $_descrizione;
    }

    public function getUrlImg(){
        return $this->urlImg;
    }

    public function setUrlImg(string $_urlImg){
        $this->urlImg = $_urlImg;
    }
}