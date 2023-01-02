<?php
use PHPUnit\Framework\TestCase ;
require_once "ResponsableAteliers.php";
require_once "Atelier.php";


class ResponsableAteliersTest extends TestCase {
    
    public function testProgAtelier(){

        $aujourdhui = new DateTime('now');
        $troisJour = new DateTime('2023-01-04'); 
        $septJour = new DateTime('2023-01-08');
        $atelier1 = new Atelier(1,$aujourdhui, $septJour);
        $atelier2 = new Atelier(2,$aujourdhui, $troisJour);
        $ResponsableAteliers = new ResponsableAteliers(1,"HOUMMIRAT","Sanaâ");


        $this->assertEmpty($ResponsableAteliers->getAteliers());
        $this->assertSame(0, $ResponsableAteliers->getNbAteliers());

        $ResponsableAteliers->progAtelier($atelier1);
        $this->assertEmpty($ResponsableAteliers->getAteliers());
        $this->assertSame(0, $ResponsableAteliers->getNbAteliers());

        $ResponsableAteliers->progAtelier($atelier2);
        $this->assertNotEmpty($ResponsableAteliers->getAteliers());
        $this->assertSame(1, $ResponsableAteliers->getNbAteliers());
    }

    public function testGetAteliersAvenir(){

        $aujourdhui = new DateTime('now');
        $troisJour = new DateTime('2023-01-03');
        $ResponsableAteliers = new ResponsableAteliers(1,"HOUMMIRAT","Sanaâ");
        $atelier1 = new Atelier(1,$aujourdhui, $troisJour);
        $ResponsableAteliers->progAtelier($atelier1);

        $this->assertNotEmpty($ResponsableAteliers->getAteliersAvenir());
    }

    public function testSuppAteliers(){

        $aujourdhui = new DateTime('now');
        $troisJour = new DateTime('2023-01-03');
        $ResponsableAteliers = new ResponsableAteliers(1,"HOUMMIRAT","Sanaâ");
        $atelier1 = new Atelier(1,$aujourdhui, $troisJour);

        $this->assertSame(0, $ResponsableAteliers->getNbAteliers());

        $ResponsableAteliers->progAtelier($atelier1);

        $this->assertSame(1, $ResponsableAteliers->getNbAteliers());

    }
    
}

?>
