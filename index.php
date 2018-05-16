<!DOCTYPE html> <!--tipo de documento-->
<html lang="es">

<head>
     <title>DeepTec</title> <!--titulo de pestaña-->
     <meta charset="UTF-8"/>
	 <meta name="DeepTec" content="Esta es la pagina eu buscas!! descarga todos los documentos que necesitas para el tecnologico"/> <!--nombre y descripcion para el buscador-->
	 <meta name="DEEPTEC,DeepTec,Descargar archivos Tecnologico" content="descargas, DeepTec"/> <!--parabras claves-->
     <link href="logo_deeptec.ico" type="image/xicon" rel="shortcut icon"/> <!--colocar imagen icono-->
     <link rel="stylesheet" href="css/fontello.css">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/formulario.css">
     <link rel="stylesheet" href="css/contador.css">

</head>
    
    
<body>
        <header>
            <div id="contenedor">
                <img id="icono_barra"src="logo_deeptec.ico">
                <h1 id="titulo">DeepTec</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu" for="menu-bar"></label>  <!--el for relaciona el checkbox con el icono "icon-menu"-->
                <nav id="menu">
                    <a href="#"> <b>INICIO</b> </a>
                <a href="https://mega.nz/#F!nXxzjJKD!nDkb4PFswJnPZiyMTsXjoQ" target="_blank"> <b>DOCUMENTOS</b></a>
                    <a href="https://mega.nz/#F!XWZGCQ4a!gN0Ap2URndxK8sHb-yq-sg" target="_blank"> <b>PRACTICAS</b></a>
                        <a href="https://mega.nz/#F!yGJnlLaS!mmVfieWwirRf07Ws07ZjfA" target="_blank"> <b>TESTS</b></a>
                        <a href="https://mega.nz/#F!WaJSyTzJ!GLbYPGdzX8B-q7lKTyXuxA" target="_blank"> <b>LIBROS</b></a>
                    <a href="http://portal.itmerida.mx:7778/portal/page/portal" target="_blank"> <b>ACCESO AL PORTAL</b></a>
                    <a href="quejas_contacto.html"> <b>QUEJAS Y CONTACTO</b> </a>
                </nav>
            </div>
        </header>
        
    
        <main>
            <section id="banner">|
                <img src="bannerdeeptec03.png">
            </section>
            
            
            <section id="bienvenida">
                <div id=contenedor>
                    <br><h2>Bienvenido a DeepTec</h2>
                    <p>El DeepTec te ayudara a conseguir tus metas de convertirte en un gran empresario, en tu propio jefe o en conseguir un puesto alto en una empresa prestigiada, utiliza todos los recursos que aqui te proporcionamos y ¡ve tras tus sueños! 
                        <br><br><b>Atte: Los desarrolladores.</b></p>
                        <br>
                        <br><b>Nota importante: </b>(Solo si estas en un dispositivo movil) Debido a que los documentos estan alojados en Mega.nz solo podras descargarlo con la aplicacion oficial de Mega en <b id="dm">dispositivos moviles</b>, si este es tu caso puedes descargar la aplicacion aqui:<br><br>
                    <a href ="https://play.google.com/store/apps/details?id=mega.privacy.android.app&hl=en_US" target="_blank"><img id="app" src="img/google_play_badge2.png"></a><br>
                    
                    <a href="https://itunes.apple.com/mx/app/mega/id706857885?mt=8" target="_blank"><img id="app" src="img/app_store_image2.png"></a>
                </div> 
            </section>
            
                
            <section id="fondo_form">
                <form action="" method="post" enctype="multipart/form-data">
                    <h2 id="titulo_form">Aporta a DeepTec</h2>
                    <input type="text" name="Documento" placeholder="Tipo de documento (Libro, practica, etc.)" required>
                    <input type="text" name="Carrera" placeholder="Carrera" required>
                    <input type="text" name="Semestre" placeholder="Semestre" required>
                    <input type="text" name="Materia" placeholder="Materia" required>
                    <input type="text" name="Unidad" placeholder="Unidad (solo si es necesario)">
                    <input type="text" name="Profesor" placeholder="Profesor (solo si es necesario)">
                    <input id="file" type="file" name="File" placeholder="Tu archivo aqui" required>
                    <textarea name="Comentario" placeholder="Escriba un comentario"></textarea>
                    <input type="submit" value="ENVIAR" id="boton">
                </form>
                
    <?php

    echo $_FILE['File']['name'];
    echo "<br>";
    echo $FILE['File']['type'];
    echo $FILE['File']['size'];
    echo "<br>";
    echo $FILES['File']['tmp_name'];
    echo "<br>";
    echo $FILES['File']['error'];
    >?
                
            </section>
            
                
            <section id="fondo_contador">
                
                <table>
                    <tr id="titulo_contador">
                        <td colspan="4">Tiempo faltante para realizar la evaluacion docente</td>
                    </tr>
                    <tr id="dhms">
                        <th>DIAS</th>
                        <th>HORAS</th>
                        <th>MINUTOS</th>
                        <th>SEGUNDOS</th>
                    </tr>
                    
                    <tr>
                        <th id="day">00</td>
                        <th id="hor">00</td>
                        <th id="min">00</td>
                        <th id="sec">00</td>
                    </tr>
                </table>
                <script> /*scrip para funcio del contador*/ 
                function cd(){
                var rem_time = new Date(2018,4,12).getTime() - new Date().getTime(); /*aqui se pone la fecha deseada*/
                var s = Math.floor(rem_time / 1000);
                var m = Math.floor(s / 60);
                var h = Math.floor(m / 60);
                var d = Math.floor(h / 24);
                
                s %= 60;
                m %= 60;
                h %= 60;
                    
                if(d $$ h && m && s <= 0){  /*si d,h,m ys llegan a 0 o menos es contador mostrara 00*/
                document.getElementById("day").innerHTML = d;
                document.getElementById("hor").innerHTML = h;
                document.getElementById("min").innerHTML = m;
                document.getElementById("sec").innerHTML = s;
                }
                    
                setInterval(cd,1000);
                }cd();
                </script>  
                
                <p id="mensaje_evaluacion">Si aun no haz realizado tu evaluacion docente te recomendamos que lo hagas lo mas pronto posible, evita tener complicaciones futuras. <br> Puedes acceder al portal desde el menu superior.
                <a href="#">¿Que hago si no pude realizar mi evaluacion docente a tiempo?</a></p>
                
            </section>

    <footer id=pie>
        <div id=contenedor>
            Esta pagina fue elaborada para fines educativos y de conocimiento general|Todos los derechos reservados
        </div>
    </footer> 

        </main>
        
    </body>
</html>