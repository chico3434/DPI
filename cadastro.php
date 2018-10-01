<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('location: erro.php');
}

include 'lib/fw.php';

function pageTitle(){
    echo 'Cadastro';
}

function listaProfissoes(){
    try{
        $sql = "SELECT * FROM Profissoes";

        $conn = getConnection();
        $resultado = $conn->query($sql);

        if($resultado !== false) {
            foreach($resultado as $row) {
                echo "<option value=\"$row[cod]\">$row[nome]</option>";
            }
        }
        $conn = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function verificarErros(){
    if(isset($_SESSION['erro'])){
        echo "<div class='alert alert-danger'>";
        echo $_SESSION['erro'];
        echo "</div>";
        unset($_SESSION['erro']);
    }
}

function mainContent(){
    verificarErros();
    include 'cadastro.form.php';
}

include 'lib/main-template.php';