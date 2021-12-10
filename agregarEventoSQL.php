<?php

include 'config.php'; 
include 'funciones.php';


$inicio=_formatear($_POST["from"]);
$final=_formatear($_POST["to"]);
$tipoDeEvento=$_POST["class"];
$titulo=$_POST["title"];
$eventoTxt=$_POST["event"];


$sql="INSERT INTO siop_calendario(id,title,body,url,class,start,end,inicio_normal,final_normal)
VALUES (
NULL ,  
'$titulo',  
'$eventoTxt',  
'',  
'$tipoDeEvento',  
'$inicio',  
'$final',  
'',  
''
);";

$bd  = $conexion->query($sql);


header("location: index.php");

?>