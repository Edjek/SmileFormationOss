<?php

    function getDatabaseConnection(){
        $user = 'root';
        $pass = '';
        $bdd = 'FormationOSS';

        return new PDO('mysql:host=localhost;dbname='.$bdd, $user, $pass);
    }

