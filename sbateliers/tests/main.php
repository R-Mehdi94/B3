<?php
    require_once "Atelier.php";
    require_once "ResponsableAteliers.php";



    $aujourdhui = new DateTime('now');
    $troisJour = new DateTime('2023-01-06'); 

    

    /*$a = $aujourdhui->diff($troisJour);
    echo $a->format('%d');
    if($a->format('%d')<='7'){
        echo "bon";
    }*/



    $resp1 = new ResponsableAteliers(1,"PHP","Mehdi");
        $atelier1 = new Atelier(1,$aujourdhui,$troisJour);


            $resp1->progAtelier($atelier1);

            var_dump($resp1->getAteliers());
                        
            echo $resp1->suppAteliers();

            $resp1->getAteliersAvenir();

    /*$resp2 = new ResponsableAteliers(2,"JAVA","Gauvain");
        $atelier4 = new Atelier(4,$aujourdhui,$dixJour);
        $atelier5 = new Atelier(5,$aujourdhui,$dixJour);
        $atelier6 = new Atelier(6,$aujourdhui,$dixJour);

            $resp2->progAtelier($atelier4);
            $resp2->progAtelier($atelier5);
            $resp2->progAtelier($atelier6);

            echo $resp2;
            
            $resp1->suppAteliers();

            echo $resp1;*/
?>




