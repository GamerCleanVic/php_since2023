<?php
    session_start();
    require_once 'senhas/loginSenhaBD.php';
    try{
        $pdo = new PDO("mysql:dbname=classificados;
        host=localhost","$loginBDMySQL","$senhaBD");
    }catch(PDOException $e){
        echo "Falhou ".$e->getMessage();
        exit;
    }
?>
