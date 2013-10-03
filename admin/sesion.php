<?php
session_start();
include("../Conexion.php");
if($_GET["fun"]=="cerrar"){
	unset($_SESSION["$nusuario"]);
}
if($_POST["Entrar"]){	
	$password = md5($_POST["password_txt"]);
	$listado = "select * from 	usuario where usuario = '$_POST[nusuario_txt]' and password  = '$password'  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$_SESSION["$nusuario"] = $rs["usuario"];
	} else {
		echo "Usuario o password no corresponde";
	}
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador</title>
<link href="../font/stylesheet.css" rel="stylesheet" type="text/css">
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center">&nbsp;</p>
<div align="center">
  
  <p>
    <span class="titulos">
    <?php if ($_SESSION["$nusuario"] == "") { ?>
  <strong class="texto_contactanos">Inicie sesion para modificar el contenido</strong></span></p>
  <p>&nbsp;</p>
</div>
<form id="form1" name="form1" method="post" action="sesion.php">
  <div align="center">
    <table width="226" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="80" class="texto_destacado" >Usuario</td>
        <td width="146"><label>
          <input name="nusuario_txt" type="text" class="textobox"  id="nusuario_txt" size="15" />
        </label></td>
      </tr>
      <tr>
        <td height="12" colspan="2" ></td>
      </tr>
      <tr>
        <td class="texto_destacado" >Password</td>
        <td><input name="password_txt" type="password" class="textobox"  id="password_txt" size="15" /></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <input name="Entrar" type="submit" class="boton4" id="Entrar" value="Entrar" />
            </label>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <p>
    <?php } else  { ?>
  </p>
  <p class="texto_contactanos"><strong class="botonera">Usuario</strong>: <?php echo $_SESSION["$nusuario"]; ?></p>
  <p class="titulos">&nbsp;</p>
  <table width="200" border="1" cellspacing="1" cellpadding="0">
    <tr>
      <td><table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="30" align="left" bgcolor="#385BA3"><div align="center" class="texto_pie"><strong>MENU PRINCIPAL</strong></div></td>
        </tr>
        
        <tr>
          <td height="5" align="left" bgcolor="#FFFFFF"></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="texto"><a href="inicio.php" class="texto_destacado">Inicio</a></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="texto"><span class="texto_destacado"><a href="destacados.php" class="texto_destacado">Destacados</a></span></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="texto"><span class="texto_destacado"><a href="nosotros.php" class="texto_destacado">Nosotros</a></span></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="texto_destacado"><a href="servicios.php" class="texto_destacado">Servicios</a></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="admin"><span class="texto_destacado"><a href="contacto.php" class="texto_destacado">Contacto</a></span></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="texto_destacado"><a href="post.php" class="texto_destacado">Post Consulta</a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FFFFFF"  class="post-text">&nbsp;</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF"  class="admin"><strong><a href="cambiopassword.php" class="texto_titulo" >Cambio de password</a></strong></td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF" class="textopie" ><strong><a href="sesion.php?fun=cerrar" class="texto_titulo" >Cerrar sesion</span></a></strong></td>
        </tr>
        
      </table></td>
    </tr>
  </table>
</div>
<?php } ?>
</body>
</html>
