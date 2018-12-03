<?php

include 'lib/fw.php';

function pageTitle(){
    echo "Gráficos";
}

function getQuantidadePor($coluna){
    $sql = "SELECT $coluna FROM Funcionarios";

    $conn = getConnection();
    $resultado = $conn->query($sql);
    $array = array();
    if($resultado !== false) {
        foreach($resultado as $row) {
            if($coluna == "dataNascimento"){
                $idade = calcIdade($row[$coluna]);
                $array[$idade]++;
            } else if ($coluna == "sexo"){
                $sexo = codParaSexo($row[$coluna]);
                $array[$sexo]++;
            } else if ($coluna == "profissao"){
                $profissao = codParaPro($row[$coluna]);
                $array[$profissao]++;
            }else {
                $array[$row[$coluna]]++;
            }
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