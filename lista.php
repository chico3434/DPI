<?php

include 'lib/fw.php';

function pageTitle(){
    echo 'Listagem dos Funcionários';
}

function codParaSexo($cod){
    if($cod == 'M'){
        return 'Masculino';
    } else if($cod == 'f'){
        return 'Feminino';
    } else {
        return 'Outro';
    }
}

function codParaPro($cod){
    $dado = array(
        "cod" => $cod
    );
    $resp = sqlSelectFirst("Profissoes", $dado);
    if(!$resp){
        echo "<div class='alert alert-danger'>";
        echo "Erro ao consultar Profissoes";
        echo "</div>";
        die();
    } else {
        return $resp['nome'];
    }
}

function listaFuncionarios(){
    try{
        $sql = "SELECT * FROM Funcionarios";

        $conn = getConnection();
        $resultado = $conn->query($sql);

        if($resultado !== false) {
            foreach($resultado as $row) {
                $idade = calcIdade($row['dataNascimento']);
                $sexo = codParaSexo($row['sexo']);
                $profissao = codParaPro($row['profissao']);
                echo "<tr>";
                echo "<td scope=\"row\">$row[nome]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$idade</td>";
                echo "<td>$sexo</td>";
                echo "<td>$profissao</td>";
                echo "<td>$row[salario]</td>";
                echo "</tr>";    
            }
        }
        $conn = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function mainContent(){
    include 'lista.content.php';
}

include 'lib/main-template.php';