<?php

    use PHPUnit\Framework\TestCase ;
    require_once "ModeleSBAteliers.php" ;


    class ConnexionClientTest extends TestCase {

        /**
         * @dataProvider connectionProvider 
         * @test 
         */

        public function connexionClientTest($email, $mdp){         

            $this->assertNotFalse(ModeleSBAteliers::getClient($email,$mdp));

        }

        public function connectionProvider(){
            return [
                    ["valentine.onestas@gmail.com","azerty"],
                    ["n.hafidi@gmail.com","azerty"],
                    ["c.osaro@orange.fr","azerty"]
            ];
        }
    }

?>