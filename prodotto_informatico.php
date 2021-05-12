<?php 

include 'prodotto.php';

class ProdottoInformatico extends Prodotto{

    private $memoria;
    private $clock;

    public function __construct($_nome, $_prezzo, $_descrizione, $_urlImg, $_memoria, $_clock){

        parent::__construct($_nome, $_prezzo, $_descrizione, $_urlImg);

        $this->setMemoria($_memoria);
        $this->setClock($_clock);
    }

    public function getMemoria(){
        return $this->memoria;
    }

    public function setMemoria(int $_memoria){
        $this->memoria = $_memoria;
    }

    public function getClock(){
        return $this->clock;
    }

    public function setClock(float $_clock){
        $this->clock = $_clock;
    }
}