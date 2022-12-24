<?php
$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}

if($url== ''){
        require 'vues/vue-accueil.php';
    }
elseif($url[0] == 'vues' and !empty($url[1]=='vue-connexion')){
    require './vues/vue-connexion.php';
}elseif($url[0] == 'vues' and !empty($url[1]=='vue-inscription')){
    require './vues/vue-inscription.php';
}elseif($url[0] == 'vues' and !empty($url[1]=='vue-espace-client')){
    session_start();
    require './vues/vue-espace-client.php';
}elseif($url[0] == 'vues' and !empty($url[1]=='vue-consulter-profil')){
    session_start();
    require './vues/vue-consulter-profil.php';
}elseif($url[0] == 'vues' and !empty($url[1]=='vue-consulter-ateliers')){
    session_start();
    require './vues/vue-consulter-ateliers.php';
}
?>