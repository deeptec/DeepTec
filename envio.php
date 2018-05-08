<?php
$destino="deep_tec@hotmail.com"

$tipo_doc = $_port["tipo_doc"];
$carrera = $_port["carrera"];
$semestre = $_port["semestre"];
$materia = $_port["materia"];
$unidad = $_port["unidad"];
$profesor = $_port["profesor"];
$comentarios = $_port["comentarios"];

$contenido = "Tipo de documento: ".$tipo_doc . "\nCarrera: " . $carrera . "\nSemestre: " . $semestre . "\nMateria: " . $materia . "\nUnidad: " . $unidad . "\nProfesor: " . $profesor . "\nComentarios: " . $comentarios; 

mail($destino, "Documento para revición", $contenido);
header("Location:confirmacion.html");
?>