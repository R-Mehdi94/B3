
<?php

date_default_timezone_set('UTC');
require_once "Atelier.php";

class ResponsableAteliers
{

    protected $numero = 0;
    protected $nom = "Aucun Responsable";
    protected $prenom = "Aucun Responsable";

    protected $ateliers = array();


    public function __construct( $numero,  $nom,  $prenom)
    {
        $this->numero = $numero;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function supResp($resp){
        unset($resp);
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero(int $numero)
    {
        $this->numero = $numero;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom( $nom) 
    {
        $this->nom = $nom;
    }


    public function getPrenom() 
    {
        return $this->prenom;
    }

    public function setPrenom( $prenom)
    {
        $this->prenom = $prenom;
    }


    public function getAteliers()
    {
        return $this->ateliers;
    }


    public function setAteliers($ateliers) 
    {
        $this->ateliers = $ateliers;
    }

    public function getNbAteliers(){
        return count($this->ateliers);
    }

    public function progAtelier( $atelier){
        $cpt = count($this->ateliers);
        $dateEnreg = $atelier->getDateEnreg();
        $dateProg = $atelier->getDateProg();
        
        if($dateProg >= $dateEnreg){
            $diff = $dateEnreg->diff($dateProg);

            if($diff->format('%d') < '7'){
                $atelier->setRespAtelier($this);
                $this->ateliers[] = $atelier;
            }
        }
        
        $cpt2 = count($this->ateliers);
        if(
            $cpt2 - $cpt == 1
        ){
            return true;
        }
        return false;
    }
   

    public function suppAteliers(){
        $bool = false;
        foreach($this->getAteliers() as $unAtelier){
            if($unAtelier->supprimerResponsable()){
                array_pop($this->ateliers);
                $unAtelier->supprimerResponsable();
                $bool = true;
            }else{
                $bool = false;
                return false;
            }

        }
        return $bool;
    }

    public function getAteliersAvenir(){
        $date = new DateTime("now");
        $tabAtelier = [];
        foreach($this->ateliers as $atelier){
            if($atelier->getDateProg()->format('Y-m-d') > $date->format('Y-m-d')){
                 $tabAtelier = $atelier ;
            }
        }
        return $tabAtelier;
    }

    public function toString(): String {
        return "[RESP-ATELIERS] "
            . " Numero : " . $this->getNumero()
            . " Nom : " . $this->getNom()
            ." Prenom : " . $this->getPrenom();
    }

    

}
