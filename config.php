<?php
    session_start();
    if(empty($_POST) or (empty($_POST["Nome"]) or (empty($_POST["Numero"])))){
        print "<script>location.href='index.php';</script>";
    }
    include('config.php');

$Nome = $_POST["Nome"];
$Numero = $_POST["Numero"];

$sql = "SELECT = FROM usuarios
WHERE usuario = '{$Nome}'
AND senha = '{$Numero}'";

$res = $conn->query(sql) or die($conn->error);
$row = $res->fetch_object();
$qtd = $res->num_rows;

if($qtd > 0){
    $_SESSION["Nome"] = $usuario;
    $_SESSION["Numero"] $row->nome;
    $_SESSION["tipo"] = $row->tipo;
print "<script>location.href='dashboard.php';</script>";
}else{
    print "<script>alert('Uu
    suário e/po senha incorreta(s)');</script>"
    print "<script>location.href='index.php';</script>"
}





?>