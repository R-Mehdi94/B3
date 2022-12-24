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

    public function __contruct(){}

  

    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero(int $numero)
    {
        $this->numero = $numero;
    }


    public function getDateEnreg()
    {
        return $this->dateEnreg;
    }

 
    public function setDateEnreg(DateTime $dateEnreg)
    {
        $this->dateEnreg = $dateEnreg;
    }


    public function getDateProg()
    {
        return $this->dateProg;
    }


    public function setDateProg(DateTime $dateProg)
    {
        $this->dateProg = $dateProg;
    }


    public function getRespAtelier()
    {
        return $this->respAtelier;
    }

    public function setRespAtelier(ResponsableAteliers $respAtelier)
    {
        $this->respAtelier = $respAtelier;
    }

    public function toString(){
        return "[ATELIER] "
            . " Numero : " . $this->getNumero()
            . " DateEnregistrement : " . $this->getDateEnreg()->format('Y-m-d')
            . " DateProgrammée : " . $this->getDateProg()->format('Y-m-d')
            . " Responsable : " . $this->getRespAtelier()->toString();
    }
}