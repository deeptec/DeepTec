<?php

$sizeFile = $_FILES['file']['type'];

if($sizeFile <= 8388000){

 echo '<h2><br>UPS! El documento es demaciado grande para enviar, Recuerda que tambein puedes aportar enviando tus documentos a <a href="https://www.facebook.com/deep.tec.54" target="_black"> Nuesta pagina de facebook </a>si los probremas persisten porfavor ¡contactanos!.<br><br>QUE TENGAS UN EXELENTE DIA.</h2>';
  }
else{

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
echo '<br>';
echo '<b>Nombre de archivo: </b>' . $nameFile = $_FILES['file']['name'];
echo '<br>';
echo '<b>Tamaño de archivo: </b>' . $sizeFile = $_FILES['file']['size'];
echo '<br>';
echo '<b>Tipo de Archivo: </b>' . $typeFile = $_FILES['file']['type'];
echo '<br>';
echo '<b>Tipo de archivo: </b>' . $archivo = $_FILES['file']["tmp_name"];
    
  $archivo = file_get_contents($archivo);
  $archivo = chunk_split(base64_encode($archivo));

//Datos correo
  $destino = "valdezesleither@gmail.com";
    
  $contenido = "Tipo de documento: ". $tipo_doc . "\nCarrera: " . $carrera . "\nSemestre: " . $semestre . "\nMateria: " . $materia  . "\nUnidad: " . $unidad . "\nProfesor: " . $profesor . "\nComentarios: " . $comentarios . "\nContent-Type: application/octet-stream; name=\"" . $nameFile . "\nContent-Transfer-Encoding: base64\r\n" . "Content-Disposition: attachment; filename=\"" . $nameFile . "\"\r\n\r\n" . $archivo . "\r\n";

  if(mail($destino, "Documento para revición", $contenido)){
    echo "Correo enviado";
    /*header("Location:confirmacion.html");*/
  }
  else{
    echo "Error envio";
  }
}

?>