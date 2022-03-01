<?php
    function connectDb(){
        $host = "172.19.0.1";
        $user = "root";
        $pwd = "root";
        $db = "sakila";
        try {
            $conn = new PDO(
                'mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pwd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            echo "<br>Connexion réussi sur $db chez $host";
            return $conn;
        } catch (Exception $e) {
            echo "Arret du script.";
            die("<br>Error de connexion sur $db chez $host :". $e->getMessage());
        }
}
    $connection = connectDb();