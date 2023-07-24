<?php

    $host = "localhost";
    $dbname = "agenda"; //botar nome da variavel "$dbname", porque se botar só "$db" não vai rodar. Por quê? Não faço a menor ideia (te odeio, PHP).
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        
        //Ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
        
        //ERRO NA CONEXÃO
        $error = $e->getMessage();
        echo "Erro: $error";
    }