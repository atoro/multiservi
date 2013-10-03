<?php include("Conexion.php"); 
	$listado = "select * from  contacto";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$direccion = str_replace("\r\n","<br>",$rs["direccion"]);
		$correo = str_replace("\r\n","<br>",$rs["correo"]);
		$telefono =str_replace("\r\n","<br>",$rs["telefono"]);
	}
	$listado = "select * from  destacados";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$destacado1 = str_replace("\r\n","<br>",$rs["destacado1"]);
		$destacado2 = str_replace("\r\n","<br>",$rs["destacado2"]);
		$destacado3 = str_replace("\r\n","<br>",$rs["destacado3"]);
	}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="iso-8859-1">
<title>Multiservi Rancagua</title>
<link rel="stylesheet" href="css/blueberry.css" />
<link rel="stylesheet" href="css/estilos.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.blueberry.js"></script>
<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onLoad="MM_preloadImages('imagenes/social/tw2.png')">
<header>
	 <div id="contenido_header">
     	<div id="logo"><img src="imagenes/logo.png" width="210" height="199"></div>
        <nav> 
       	  <div class="li"><a href="index.php" class="li">inicio</a></div>
          <div class="li"><a href="nosotros.php" class="li">nosotros</a></div>
          <div class="li"><a href="servicios.php" class="li">servicios</a></div>
          <div class="li"><a href="ubicacion.php" class="li">ubicaci&oacute;n</a></div>
            <div class="li"><a href="contacto.php" class="li">contacto</a></div>
        </nav>
     </div>
 <div id="espuma"><img src="imagenes/espuma.png" /></div> 
 <div id="linea"></div>   
</header>
<div id="content">
	<div class="blueberry">
		<ul class="slides">
			<li><img src="imagenes/slide/1.jpg" /></li>
      		<li><img src="imagenes/slide/2.jpg" /></li>
            <li><img src="imagenes/slide/3.jpg" /></li>
            <li><img src="imagenes/slide/4.jpg" /></li>
    	</ul>
  	</div>
</div>
<div id="aside">
  <table width="950" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="398" valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="26" align="center" valign="top" class="texto_contactanos">&nbsp;</td>
        </tr>
        <tr>
          <td height="368" valign="top"><table width="949" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="70" height="345" valign="top"><img src="imagenes/dest4.png" width="70" height="70"></td>
              <td width="18">&nbsp;</td>
              <td width="861" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="27" valign="top" class="texto_titulo">Ubicaci&oacute;n</td>
                  </tr>
                <tr>
                  <td width="862" height="317" valign="top"><iframe width="862" height="317" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.cl/maps/ms?msa=0&amp;msid=210254317852162228316.0004e7d903216f7252a48&amp;ie=UTF8&amp;t=m&amp;ll=-34.161135,-70.743467&amp;spn=0.002814,0.009238&amp;z=17&amp;output=embed"></iframe><br />                    <br /></td>
                </tr>
                </table></td>
              </tr>
            </table>            <p class="texto_pie">&nbsp;</p></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="950" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="484" valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="35" valign="middle"><img src="imagenes/linea.png" width="317" height="1"></td>
          <td align="center" valign="middle" class="texto_contactanos">Servicios Destacados</td>
          <td valign="middle"><img src="imagenes/linea.png" width="317" height="1"></td>
        </tr>
        <tr>
          <td height="18" valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="317" valign="top"><table width="299" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="360" valign="top"><img src="imagenes/destacados/1.jpg" width="299" height="360"></td>
            </tr>
            <tr>
              <td height="34" align="center" bgcolor="#385BA3" class="texto_pie"><?php echo $destacado1; ?></td>
            </tr>
          </table></td>
          <td width="316" align="center" valign="top"><table width="299" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="360" valign="top"><img src="imagenes/destacados/2.jpg" width="299" height="360"></td>
            </tr>
            <tr>
              <td height="34" align="center" bgcolor="#385BA3" class="texto_pie"><?php echo $destacado2; ?></td>
            </tr>
          </table></td>
          <td width="317" align="right" valign="top"><table width="299" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="360" valign="top"><img src="imagenes/destacados/3.jpg" width="299" height="360"></td>
            </tr>
            <tr>
              <td height="34" align="center" bgcolor="#385BA3" class="texto_pie"><?php echo $destacado3; ?></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<footer>
	<div id="contenido_pie">
	  <table width="950" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="80">&nbsp;</td>
        </tr>
	    <tr>
	      <td height="123" valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td width="317" height="124" valign="top"><table width="317" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td width="30" height="30" bgcolor="#F5F5F5"><a href="https://twitter.com/MultiServiRgua" target="new" onMouseOver="MM_swapImage('Image7','','imagenes/social/tw2.png',1)" onMouseOut="MM_swapImgRestore()"><img src="imagenes/social/tw1.png" width="30" height="30" id="Image7"></a></td>
	              <td width="20" height="30">&nbsp;</td>
	              <td width="30" bgcolor="#F5F5F5"><a href="https://www.facebook.com/multiservi.rancagua" target="new"><img src="imagenes/social/fb1.png" width="30" height="30" id="Image8"></a></td>
	              <td width="20">&nbsp;</td>
	              <td width="217" align="center" bgcolor="#F5F5F5" class="texto_contactanos"><a href="contacto.php" class="texto_contactanos">Contactanos</a></td>
	              </tr>
              </table></td>
	          <td width="316">&nbsp;</td>
	          <td width="317" valign="top"><p class="texto_pie"><?php echo $direccion; ?><br>
Fono: <?php echo $telefono; ?><br>
<?php echo $correo; ?></p>
                <p>&nbsp;</p>
                <p class="texto_pie"><br>
                </p>
              <p class="texto_pie"><a href="http://www.emagenic.cl" class="texto_pie">sitio desarrollado por emagenic.cl</a></p></td>
            </tr>
          </table></td>
        </tr>
      </table>
	</div>
</footer>
</body>
</html>
