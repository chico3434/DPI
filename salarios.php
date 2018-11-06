<?php
include 'lib/fw.php';
$cod = $_POST['cod'];
$sql = "SELECT * FROM Salarios where cod = '$cod'";
$con = getConnection();
$resultado = $con->query($sql);
$array = array();
foreach($resultado as $r){
  $array[] = $r;
}
echo json_encode($array);