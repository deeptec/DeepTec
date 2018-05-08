<?php
$destino="deep_tec@hotmail.com";

$tipo_doc = $_POST["tipo_doc"];
$carrera = $_POST["carrera"];
$semestre = $_POST["semestre"];
$materia = $_POST["materia"];
$unidad = $_POST["unidad"];
$profesor = $_POST["profesor"];
$comentarios = $_POST["comentarios"];

$contenido = "Tipo de documento: ".$tipo_doc . "\nCarrera: " . $carrera . "\nSemestre: " . $semestre . "\nMateria: " . $materia . "\nUnidad: " . $unidad . "\nProfesor: " . $profesor . "\nComentarios: " . $comentarios; 

mail($destino, "Documento para revición", $contenido);
header("Location:confirmacion.html");
?>
