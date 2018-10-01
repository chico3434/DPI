<?php

include 'lib/fw.php';

function pageTitle(){
    echo "Entrar";
}

function verificarErros(){
    session_start();
    if(isset($_SESSION['erro'])){
        echo "<div class='alert alert-danger'>";
        echo $_SESSION['erro'];
        echo "</div>";
        unset($_SESSION['erro']);
    }
}

function mainContent(){
    verificarErros();
    include 'entrar.form.php';
}

include 'lib/main-template.php';