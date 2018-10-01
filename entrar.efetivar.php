<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include 'lib/fw.php';

$dado = array (
    "usuario" => $usuario
);

$row = sqlSelectFirst("Administradores", $dado);

session_start();
if(!$row){
    $_SESSION['erro'] = "Usuario nao existe";
    header('location: entrar.php');
} else {
    if($row[senha] == $senha){
        $_SESSION['usuario'] = $usuario;
        header('location: index.php');
    } else {
        $_SESSION['erro'] = "Senha errada";
        header('location: entrar.php');
    }
}

?>