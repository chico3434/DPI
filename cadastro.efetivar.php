<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('location: erro.php');
}

include 'lib/fw.php';

$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$profissao = $_POST['profissao'];
$salario = $_POST['salario'];

$dataNascimento = dateToSQL(strToDate($dataNascimento));

$dados = array(
    "nome" => $nome,
    "dataNascimento" => $dataNascimento,
    "email" => $email,
    "sexo" => $sexo,
    "profissao" => $profissao,
    "salario" => $salario
);

$resp = sqlInsert("Funcionarios", $dados);
if(!$resp){
    session_start();
    $_SESSION['erro'] = "Erro ao inserir";
    header('location: cadastro.php');
} else {
    echo "<a href='index.php'>Index</a>";
}