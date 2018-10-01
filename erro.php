<?php

include 'lib/fw.php';

function pageTitle(){
    echo "Erro de permissão";
}

function mainContent(){
    include 'erro.content.php';
}

include 'lib/main-template.php';

?>