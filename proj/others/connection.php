<?php
// Definir conexão com banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$base = "projeto_carros";

// Conectar com o bando de dados
$con = mysqli_connect($host, $user, $pass);
$banco = mysqli_select_db($con, $base);

// Mensagem de erro
if(mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: ".
        mysqli_connect_error() . " ( " . mysqli_connect_errno() . " )"
    );
}

// Configuração de Caracteres
mysqli_query($con, "SET NAMES 'utf8'");
mysqli_query($con, "SET character_set_connection=utf8");
mysqli_query($con, "SET character_set_client=UTF8");
mysqli_query($con, "SET character_set_results=utf8");
?>