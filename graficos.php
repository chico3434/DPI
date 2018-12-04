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
                if(isset($array[$idade])){
                    $array[$idade]++;
                } else {
                    $array[$idade] = 1;
                }
            } else if ($coluna == "sexo"){
                $sexo = codParaSexo($row[$coluna]);
                if(isset($array[$sexo])){
                    $array[$sexo]++;
                } else {
                    $array[$sexo] = 1;
                }
            } else if ($coluna == "profissao"){
                $profissao = codParaPro($row[$coluna]);
                if(isset($array[$profissao])){
                    $array[$profissao]++;
                } else {
                    $array[$profissao] = 1;
                }
            }else {
                if(isset($array[$row[$coluna]])){
                    $array[$row[$coluna]]++;
                } else {
                    $array[$row[$coluna]] = 1;
                }
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