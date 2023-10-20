<?php

function connection()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "mvc_test";

    try {
        $connexion = new PDO('mysql:host='.$server.';dbname='.$db, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connexion;
    } catch (PDOException $e) {
        die("Echec de la connexion : " . $e->getMessage());
    }
}