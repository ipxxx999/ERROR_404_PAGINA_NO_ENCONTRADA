<?php
?>
<html> 
<head> 

<title>404 HTML</title>

	<!-- Custom stlylesheet -->


<style id="" media="all">/* cyrillic-ext */

* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 410px;
  width: 100%;
  text-align: center;
}

.notfound .notfound-404 {
  height: 310px;
  position: relative;
  z-index: -1;
}

.notfound .notfound-404 h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: 230px;
  margin: 0px;
  font-weight: 900;
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSiPD6aQzgjLJgYCxAKEaE4mZPzRnd63ivEsw&usqp=CAU') no-repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-size: cover;
  background-position: center;
}


.notfound h2 {
  font-family: 'Montserrat', sans-serif;
  color: #000;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 0;
}

.notfound p {
  font-family: 'Montserrat', sans-serif;
  color: #000;
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 20px;
  margin-top: 0px;
}

.notfound a {
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  text-decoration: none;
  text-transform: uppercase;
  background: #0046d5;
  display: inline-block;
  padding: 15px 30px;
  border-radius: 40px;
  color: #fff;
  font-weight: 700;
  -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
          box-shadow: 0px 4px 15px -5px #0046d5;
}


@media only screen and (max-width: 767px) {
    .notfound .notfound-404 {
      height: 142px;
    }
    .notfound .notfound-404 h1 {
      font-size: 112px;
    }

}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(./fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(./fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 900;
  src: local('Montserrat Black'), local('Montserrat-Black'), url(./fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_epG3gnD_g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
			</div>
			<h2>404 PAGINA NO ENCONTRADA</h2>
			<p>Es posible que la p&#225;gina que est&#225; buscando se haya *eliminada* cambi&#243; de nombre o no est&#225; disponible.</p>
			<a href="index.php">Ir a la p&#225;gina de inicio</a>
		</div>
	</div>

</body>

</html>

<title>Documento no encontrado</title> 
</head> 
<body> 
El documento: que buscas.<b>http://<?php
echo $_SERVER['SERVER_NAME'];
?><?=$_SERVER['REQUEST_URI'];?></b> 

<?php
//After upload you need to set this page as the ErrorDocument in .htaccess using
//
//ErrorDocument 404 /404.php
//
//This PHP Script creates a 404 Page with the ability to check if the person just put the file in a wrong Case Sensitivty, wrong extension, or missing a letter.
//Example would be, if I own the file named FileName.php
//A member can go to FILENAME.PHP and filename.php and be redirected to the correct page.
//A member can go to File.php or FileNa.php (if those 2 don't exist, it will find FileName.php)
//A member can go to filename.txt or filename.gif (if those 2 don't exist, it will find FileName.php)

//This file is filled with comments so you know what everything does.

//This function creates the current pages URL,
function CurrentPageURL()
{
$pageURL = $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
$pageURL .= $_SERVER['SERVER_PORT'] != '80' ? $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"] : $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
return $pageURL;
}

$ur = basename($_SERVER['REQUEST_URI'], ""); //This gets the files name
$uri = substr($_SERVER['REQUEST_URI'], 1); //This gets the files directory and file name
$websitendir = urldecode(str_replace($ur, "", CurrentPageURL()));//This creates Website and Directory but no filename.
$pagedir = urldecode(str_replace($ur, "", $uri));//This removes the files name, to produce just the directory
$path_parts = pathinfo(''.$pagedir.$ur); //Get the paths info
$nameWE = $path_parts['filename']; //Grabs the files name without the extention.

$stack = array (); //This is the start of the Files array



$stackNE = array (); //This is the start of the Files array
 {
		;
$tfile = explode(".", $file);
$nu = count($tfile);
$nu = 2-$nu;
array_push ($stackNE,$tfile[$nu]); //adding each file to the array snd returning it as $stack
        }
    
    

$stackNE = array_filter($stackNE);

$stack2 = explode(',',strtoupper(join(',',$stack))); //Creates the same array as Stack but all upper case
$index = array_search(strtoupper($ur), $stack2); //Grabs the Array index of where the filename they want to go to
$link = $websitendir.$stack[$index]; //Creates the link that the users are trying to get to

if($index){ //If Index doesnt exsist that means that the file they attempted to go to doesnt even exsist.
//Here we redirect to the correct link
header('Location: '.$link.'');
}else{
$newr = array (); //This is the start of the the new Files
foreach($stack2 as $key1=>$value1) {
  if(strpos($value1, strtoupper($ur))) {
  array_push ($newr,$value1);
  }
}
if($newr){ 
$nlink = $websitendir.$newr[0]; //Creates the new link
header('Location: '.$nlink.'');
}else{
$newr2 = array (); //This is the start of the the new Files with different extentions that exist.
$newextentions = array(1 => $nameWE.'.html',$nameWE.'.htm',$nameWE.'.gif',$nameWE.'.jpg',$nameWE.'.png',$nameWE.'.cgi',$nameWE.'.pl',$nameWE.'.js',$nameWE.'.java',$nameWE.'.class',$nameWE.'.asp',$nameWE.'.cfm',$nameWE.'.cfml',$nameWE.'.shtm',$nameWE.'.shml',$nameWE.'.php',$nameWE.'.php3');
foreach($newextentions as $key=>$value) {
if (file_exists( ''.$pagedir.$value)) {
  array_push ($newr2,$value);
}
}

if($newr2){
$nlink2 = $websitendir.$newr2[0]; //Creates the new link
}else{
//This is if the file doesnt exsist, as you see I put a simple 404 message

echo "<h3> Es un Archivo no encontrado</h1>Lo sentimos, no se pudo encontrar el archivo que buscaba. Es posible que se haya mudado a una nueva ubicación o podría haber sido temporalmente, movido o incluso *eliminado* deleted.<br>
Para ir a la página principal de este sitio, haga clic en el enlace siguiente:<br>
<a href = 'index.php'><http://MiWeb.com/</a>";
}
}
}
?>


</b> 
no ha sido encontrado en nuestro servidor.<br> 
El error ha sido comunicado al administrador del sitio. Disculpe las molestias 
ocasionadas.
        

<?
//Indicamos la fecha y hora del suceso.
// Zona horaria del servidor
date_default_timezone_set("America/New_York");
$fecha = date('d-m-Y H:i:s');

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: UneteVideoMas <unetevideomas@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


if(isset($_POST['send'])){
        $from =  $_POST['unetevideomas@gmail.com'];
        $tucorreo = $_POST['tucorreo'];
        $message = $_POST['mensaje'];
        $carrier = $_POST['carrier'];
        if(empty($from)){
          echo("enter the email");
          exit();

        } 
else if(empty($tucorreo)){
      echo("Ingrese el Correo");
        exit();
      }
    elseif(empty($carrier)){
      echo("ingrese el operador específico");
      exit();
       }
    else if(empty($message)){
     echo("ingrese el mensaje");
     exit();
     }
     else{
        $mensaje = wordwrap($mensaje, 70);
        $header = $from;
        $subject = 'Documento no encontrado.';
        $mensaje='El documento: ' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . ' no ha sido encontrado en el sitio: ' .$_SERVER['SERVER_NAME']. ' al tratar de ser accedido el ' . $fecha . ' desde la direcci�n ' . $_SERVER['HTTP_REFERER'];
        $to = $tucorreo.'unetevideomas@gmail.com'.$carrier;
        date_default_timezone_set("America/New_York");
        $fecha = date('d-m-Y H:i:s');
        $result = mail($to, $subject, $mensaje, $header);
        echo("message sent to".$to);

     }

     }
?>
<p> 

   <input type="submit" value="Ver y Enviar" />   </form>

</body>
</html>