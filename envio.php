<?php
/*ini_set("SMTP","mail.deeptec.github.io/DeepTec");
ini_set("smtp_port","localhost");
ini_set('sendmail_from','deep_tec@hotmail.com');*/

//datos del formulario
$tipo_doc = htmlspecialchars($_POST['Documento']);
$carrera = htmlspecialchars($_POST['Carrera']);
$semestre = htmlspecialchars($_POST['Semestre']);
$materia = htmlspecialchars($_POST['Materia']);
$unidad = htmlspecialchars($_POST['Unidad']);
$profesor = htmlspecialchars($_POST['Profesor']);
$comentarios = htmlspecialchars($_POST['Comentario']);

echo '<b>El documento es: </b>' . $tipo_doc;
echo '<br>';
echo '<b>Carrera: </b>' . $carrera;
echo '<br>';
echo '<b>Semestre: </b>' . $semestre;
echo '<br>';
echo '<b>Materia: </b>' . $materia;
echo '<br>';
echo '<b>Unidad: </b>' . $unidad;
echo '<br>';
echo '<b>Profesor: </b>' . $profesor;
echo '<br>';
echo '<b>Tu comentario: </b>' . $comentarios;
//datos archivo
/*echo $nameFile = htmlspecialchars($_FILES['file']['name']);
$sizeFile = $_FILES['file']['size'];
$typeFile = $_FILES['file']['type'];
$tempFile = $_FILES['file']["tmp_name"];*/

/*$fp = fopen($tempFile, "rb");
$file = fread($fp, $sizeFile);
$file = chunk_split(base64_encode($file));*/

//Datos correo
$destino = "valdezesleither@gmail.com";
    
$contenido = "Tipo de documento: ". $tipo_doc . "\nCarrera: " . $carrera . "\nSemestre: " . $semestre . "\nMateria: " . $materia . "\nUnidad: " . $unidad . "\nProfesor: " . $profesor . "\nComentarios: " . $comentarios; /*. "\nArchivo: " . $file*/;

if(mail($destino, "Documento para revición", $contenido)){
    echo "Correo enviado";
    header("Location:confirmacion.html");
}
else{
    echo "Error envio";
}

?>