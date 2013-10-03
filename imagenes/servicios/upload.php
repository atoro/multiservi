<? 
//tomo el valor de un elemento de tipo texto del formulario 
$cadenatexto = $_GET["cadenatexto"].".jpg"; 
echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>"; 

//datos del arhivo 
$nombre_archivo = $cadenatexto;
$tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
$tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
//compruebo si las características del archivo son las que deseo 

    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
       echo "<div align=center>El archivo ha sido cargado correctamente.</div><div align=center>"; 
	  
		  echo "<a href=../../admin/servicios.php>"; 
	   
	   
	   
	   
	   
	   
	   echo "VOLVER</a></div>";
    }else{ 
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
    } 

?> 