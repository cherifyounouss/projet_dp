<?php
require_once 'EntityManager.php';
require_once 'JoueurManager.php';
require_once 'ProfilManager.php';

class FabriqueDAO
{
    public static function getDAOInstance($instance) {
        if(strcmp($instance, 'profil') == 0) {
            return new ProfilManager();
        }
        if(strcmp($instance, 'joueur') == 0) {
            return new JoueurManager();
        }
    }

    private function __construct() {}
}

?>