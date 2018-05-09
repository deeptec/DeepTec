<?php
ini_set("SMTP","mail.deeptec.github.io/DeepTec");
ini_set("smtp_port","localhost");
ini_set('sendmail_from','deep_tec@hotmail.com');

//datos del formulario
$tipo_doc = strip_tags($_GET['tipo_doc']);
$carrera = strip_tags($_GET['carrera']);
$semestre = strip_tags($_GET['semestre']);
$materia = strip_tags($_GET['materia']);
$unidad = strip_tags($_GET['unidad']);
$profesor = strip_tags($_GET['profesor']);
$comentarios = strip_tags($_GET['comentarios']);
//datos archivo
$nameFile = $_FILES['file']['name'];
$sizeFile = $_FILES['file']['size'];
$typeFile = $_FILES['file']['type'];
$tempFile = $_FILES['file']["tmp_name"];

$fp = fopen($tempFile, "rb");
$file = fread($fp, $sizeFile);
$file = chunk_split(base64_encode($file));

//Datos correo
$destino = "valdezesleither@gmail.com"
    
$contenido = "Tipo de documento: ". $tipo_doc . "\nCarrera: " . $carrera . "\nSemestre: " . $semestre . "\nMateria: " . $materia . "\nUnidad: " . $unidad . "\nProfesor: " . $profesor . "\nComentarios: " . $comentarios. "\nArchivo: " . $file;  

if(mail($destino, "Documento para revición", $contenido)){
    echo "Correo enviado";
    header("Location:confirmacion.html");
}
else{
    echo "Error envio";
}

?>
