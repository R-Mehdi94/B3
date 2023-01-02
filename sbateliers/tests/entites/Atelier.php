<?php

date_default_timezone_set('UTC');
require_once "ResponsableAteliers.php";

class Atelier{

    protected $numero;
    protected $dateEnreg;
    protected $dateProg;

    protected $respAtelier;


    public function __construct( $numero,  $dateEnreg,  $dateProg)
    {
        $this->numero = $numero;
        $this->dateEnreg = $dateEnreg;
        $this->dateProg = $dateProg;

    }

    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero( $numero)
    {
        $this->numero = $numero;
    }


    public function getDateEnreg()
    {
        return $this->dateEnreg;
    }

 
    public function setDateEnreg( $dateEnreg)
    {
        $this->dateEnreg = $dateEnreg;
    }


    public function getDateProg()
    {
        return $this->dateProg;
    }


    public function setDateProg( $dateProg)
    {
        $this->dateProg = $dateProg;
    }


    public function getRespAtelier()
    {
        return $this->respAtelier;
    }

    public function setRespAtelier($respAtelier)
    {
        $this->respAtelier = $respAtelier;
    }

    public function supprimerResponsable(){
        $this->respAtelier = null;
        return true;
    }

    public function toString(){
        if($this->respAtelier != null){
            return "[ATELIER] "
                . " Numero : " . $this->getNumero()
                . " DateEnregistrement : " . $this->getDateEnreg()->format('Y-m-d')
                . " DateProgrammée : " . $this->getDateProg()->format('Y-m-d')
                . " Responsable : " . $this->getRespAtelier()->toString();
        }

    }
}