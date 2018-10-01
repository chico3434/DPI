<?php

include 'lib/fw.php';

function pageTitle(){
    echo "Home";
}

function mainContent(){
    include 'home.content.php';
}

include 'lib/main-template.php';
?>