<?php

include 'lib/fw.php';

function pageTitle(){
    echo "Gráficos";
}

function porIdade(){
    $sql = "SELECT * FROM Funcionarios";

    $conn = getConnection();
    $resultado = $conn->query($sql);
    $array = array();
    if($resultado !== false) {
        foreach($resultado as $row) {
            $idade = calcIdade($row['dataNascimento']);
            $array[$idade]++;
        }
    }    
    $string = '[';
    foreach($array as $key => $value){
        $string .= "{key: \"$key\", value: $value},";
    }
    $string .= ']';
    return $string;
}

function mainContent(){
    include 'graficos.content.php';
}

include 'lib/main-template.php';