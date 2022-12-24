<?php
use PHPUnit\Framework\TestCase ;
require "ResponsableAteliers.php";
require_once "Atelier.php";


class ResponsableAteliersTest extends TestCase {
    
    public function testProgAtelier(){

        $aujourdhui = new DateTime('now');
        $dixJour = new DateTime('2022-12-25');

        $ResponsableAteliers = new ResponsableAteliers(1,"PHP","Mehdi");
        $this->assertEmpty($ResponsableAteliers->getAteliers());
        $this->assertSame(0, $ResponsableAteliers->getNbAteliers());
        $ResponsableAteliers->progAtelier(new Atelier(1,$aujourdhui, $dixJour));
        $this->assertNotEmpty($ResponsableAteliers->getAteliers());
        $this->assertSame(1, $ResponsableAteliers->getNbAteliers());
    }

    public function testGetAteliersAvenir(){

        $aujourdhui = new DateTime('now');
        $dixJour = new DateTime('2022-12-25');

        $ResponsableAteliers = new ResponsableAteliers(1,"PHP","Mehdi");
        $this->assertEmpty($ResponsableAteliers->getAteliers());
        $this->assertSame(0, $ResponsableAteliers->getNbAteliers());
        $t = new Atelier(1,$aujourdhui, $dixJour);
        $ResponsableAteliers->progAtelier($t);
        $test = $ResponsableAteliers->toString();
        $this->assertNotEmpty($ResponsableAteliers->getAteliers());

    }
    
}

?>
