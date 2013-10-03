<?php
session_start();
include("../Conexion.php");
if ($_POST["Grabar"]){
	$insertar="INSERT INTO galeria_curso (titulo,url,Tipo,cursos) 
		VALUES('$_POST[titulo]','$_POST[url]','$_POST[Tipo]','$_GET[cursos]')";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un nuevo link: ".mysql_error);

}
if ($_GET["fun"] =="eli"){
	$insertar = "delete from galeria_curso WHERE id = '".$_GET["foto"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un mensaje: ".mysql_error);
	$dir="../detallecursos/galeria/". $_GET["foto"] .".jpg";
	if(file_exists($dir)) { 
		if(unlink($dir)) 
			print ""; 
		} else 
			print "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../font/stylesheet.css" rel="stylesheet" type="text/css">
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<title>Documento sin título</title>
<link rel="shortcut icon" href="../../favicon.ico"> 
	<link href="../css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../imagenes/icon.png">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="galeria_curso.php?cursos=<?php echo $_GET["cursos"]; ?>"><table width="50%" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="textotitulospropiedades">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="19%" class="texto">Titulo</td>
          <td width="81%"><label for="titulo"></label>
            <input name="titulo" type="text" id="titulo" size="50" /></td>
        </tr>
        <tr>
          <td align="center"><span class="texto">URL</span></td>
          <td><input name="url" type="text" id="url" size="50" /></td>
        </tr>
        <tr>
          <td align="center"><span class="texto">Tipo </span></td>
          <td><label for="Tipo"></label>
            <select name="Tipo" id="Tipo">
              <option value="imagen" selected="selected">imagen</option>
              <option value="video">video</option>
            </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="Grabar" type="submit" class="entrar" id="Grabar" value="Grabar" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<p align="center">&nbsp;</p>
<p align="center"><a href="cursos.php" class="texto">Volver</a></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php 
$listado = "select * from  galeria_curso where cursos = '$_GET[cursos]' ";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
  <tr>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../detallecursos/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../detallecursos/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center"><a href="galeria_curso.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="entrar">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../detallecursos/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../detallecursos/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center" class="texto_f"><a href="galeria_curso.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="entrar">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../detallecursos/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../detallecursos/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center" class="texto_f"><a href="galeria_curso.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="entrar">Eliminar</a></td>
      </tr>
    </table></td>
    <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
    <td width="25%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><a href="../detallecursos/galeria/Upload_foto.php?foto=<?php echo $rs["id"]; ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="texto">Cambiar foto</a></td>
      </tr>
      <tr>
        <td align="center"><img src="../detallecursos/galeria/<?php echo $rs["id"]; ?>.jpg" width="200" /></td>
      </tr>
      <tr>
        <td align="center" class="texto_f"><a href="galeria_curso.php?id=<?php echo $_GET["id"]; ?>&amp;fun=eli&amp;foto=<?php  echo $rs["id"];  ?>&amp;cursos=<?php echo $_GET["cursos"]; ?>" class="entrar">Eliminar</a></td>
      </tr>
    </table></td>
  </tr>
  <?php }}}} ?>
</table>
<p>&nbsp;</p>
</body>
</html>