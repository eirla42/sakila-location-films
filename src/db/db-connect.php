<?php
    require_once __DIR__.'/../config/db-config.php';

    function connectDb(){
        $host = DB_HOST;
        $user = DB_USER;
        $pwd = DB_PWD;
        $db = DB_NAME;
        try {
            return new PDO(
                'mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pwd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (Exception $e) {
            exit('Erreur : '.$e->getMessage());
        }
}
    $connection = connectDb();