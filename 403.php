<?php
?>
<html> 
<head> 

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="apple-touch-icon" type="image/png" href="https://www.iconarchive.com/apple-touch-icon-152x152.png">
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://raw.githubusercontent.com/ipxxx999/ERROR_404_PAGINA_NO_ENCONTRADA/main/favicon.ico">
<link rel="mask-icon" type="" href="https://raw.githubusercontent.com/ipxxx999/flag-icon-css_flags_4x3/7fbd0a5abc69571ad5d8ae91f70d9bb1d352aedf/ca.svg" color="#111">

  <title>403 - Prohibido - Forbidden</title>

<style>
@import url(https://fonts.googleapis.com/css?family=Fjalla+One);
@-webkit-keyframes rotate {
  25% {
    -webkit-transform: rotate(-28deg);
    -ms-transform: rotate(-28deg);
    transform: rotate(-28deg);
  }
  75% {
    -webkit-transform: rotate(28deg);
    -ms-transform: rotate(28deg);
    transform: rotate(28deg);
  }
}
@-moz-keyframes rotate {
  25% {
    -webkit-transform: rotate(-28deg);
    -ms-transform: rotate(-28deg);
    transform: rotate(-28deg);
  }
  75% {
    -webkit-transform: rotate(28deg);
    -ms-transform: rotate(28deg);
    transform: rotate(28deg);
  }
}
@-o-keyframes rotate {
  25% {
    -webkit-transform: rotate(-28deg);
    -ms-transform: rotate(-28deg);
    transform: rotate(-28deg);
  }
  75% {
    -webkit-transform: rotate(28deg);
    -ms-transform: rotate(28deg);
    transform: rotate(28deg);
  }
}
@keyframes rotate {
  25% {
    -webkit-transform: rotate(-28deg);
    -ms-transform: rotate(-28deg);
    transform: rotate(-28deg);
  }
  75% {
    -webkit-transform: rotate(28deg);
    -ms-transform: rotate(28deg);
    transform: rotate(28deg);
  }
}
@-webkit-keyframes msg_first {
  0%, 25%, 75.001%, 100% {
    opacity: 1;
  }
  25.001%, 75% {
    opacity: 0;
  }
}
@-moz-keyframes msg_first {
  0%, 25%, 75.001%, 100% {
    opacity: 1;
  }
  25.001%, 75% {
    opacity: 0;
  }
}
@-o-keyframes msg_first {
  0%, 25%, 75.001%, 100% {
    opacity: 1;
  }
  25.001%, 75% {
    opacity: 0;
  }
}
@keyframes msg_first {
  0%, 25%, 75.001%, 100% {
    opacity: 1;
  }
  25.001%, 75% {
    opacity: 0;
  }
}
@-webkit-keyframes msg_second {
  0%, 25%, 75.001%, 100% {
    opacity: 0;
  }
  25.001%, 75% {
    opacity: 1;
  }
}
@-moz-keyframes msg_second {
  0%, 25%, 75.001%, 100% {
    opacity: 0;
  }
  25.001%, 75% {
    opacity: 1;
  }
}
@-o-keyframes msg_second {
  0%, 25%, 75.001%, 100% {
    opacity: 0;
  }
  25.001%, 75% {
    opacity: 1;
  }
}
@keyframes msg_second {
  0%, 25%, 75.001%, 100% {
    opacity: 0;
  }
  25.001%, 75% {
    opacity: 1;
  }
}
body {
  margin: 0;
  overflow: hidden;
  background: #000;
}
body .container {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 36vmin;
  height: 77.94vmin;
  margin-left: -18vmin;
  margin-top: -38.97vmin;
}
body .container:first-child {
  transform-origin: 50% 100%;
  -webkit-animation: rotate 9s infinite linear;
  -moz-animation: rotate 9s infinite linear;
  -o-animation: rotate 9s infinite linear;
  animation: rotate 9s infinite linear;
}
body .container:last-of-type {
  pointer-events: none;
}
body .container #switch {
  display: none;
}
body .container #switch:checked ~ .ellipse, body .container #switch:checked ~ .ray {
  opacity: 0;
}
body .container .ellipse {
  position: relative;
  width: 36vmin;
  height: 27vmin;
  background: #fffee2;
  border-radius: 50%;
  z-index: 1;
}
body .container .ray {
  position: relative;
  border-top: 36vmin solid #8d8e7e;
  border-left: 11.7vmin solid transparent;
  border-right: 11.7vmin solid transparent;
  margin-top: -12.6vmin;
}
body .container .head {
  position: relative;
  width: 14.4vmin;
  height: 1.8vmin;
  margin-left: 10.8vmin;
  background: #ffab2b;
}
body .container .neck {
  position: relative;
  width: 7.38vmin;
  margin-left: 10.8vmin;
  border-top: 4.32vmin solid #333333;
  border-left: 3.6vmin solid transparent;
  border-right: 3.6vmin solid transparent;
}
body .container .body {
  position: relative;
  width: 7.308vmin;
  margin-left: 14.4vmin;
  height: 21.6vmin;
  background: #646464;
}
body .container label {
  position: absolute;
  top: 3.6vmin;
  left: 2.628vmin;
  width: 1.44vmin;
  height: 3.6vmin;
  border: 0.432vmin solid #333333;
  background: #ffab2b;
  border-radius: 10px;
  cursor: pointer;
}
body .msg {
  position: absolute;
  width: 36vmin;
  margin-left: -18vmin;
  left: 50%;
  text-align: center;
  font-family: 'Fjalla One', sans-serif;
  color: #000;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  z-index: 2;
}
body .msg.msg_1 {
  top: 6.3vmin;
  font-size: 12vmin;
  -webkit-animation: msg_first 9s infinite linear;
  -moz-animation: msg_first 9s infinite linear;
  -o-animation: msg_first 9s infinite linear;
  animation: msg_first 9s infinite linear;
}
body .msg.msg_2 {
  top: 10.8vmin;
  font-size: 4.2vmin;
  -webkit-animation: msg_second 9s infinite linear;
  -moz-animation: msg_second 9s infinite linear;
  -o-animation: msg_second 9s infinite linear;
  animation: msg_second 9s infinite linear;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no">
  <div class="container">
  <input type="checkbox" id="switch">
  <div class="ellipse"></div>
  <div class="ray"></div>
  <div class="head"></div>
  <div class="neck"></div>
  <div class="body">
    <label for="switch"></label>
  </div>
</div>
<div class="container">
  <div class="msg msg_1">403</div>
  <div class="msg msg_2">Prohibido para Usted</div>
</div>

 
</body></html>

<title>Error 403 Prohibido para Usted</title> 
</head> 

<style>
a:link {
  color: yellow;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: green;
  background-color: transparent;
  text-decoration: underline;
}
</style>


<body> 

Su IP ha sido prohibida en nuestro sistema. <b>http://<?php
echo $_SERVER['SERVER_NAME'];
?><?=$_SERVER['REQUEST_URI'];?></b> 

<?php
//After upload you need to set this page as the ErrorDocument in .htaccess using
//
//ErrorDocument 403 /403.php
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
<a href = 'https:google.com'>http://Ver Forbidden</a>";
}
}
}
?>

</b> 
Hemos enviado un correo electronico. <br>
Para el administrador del sitio. Lo siento por los inconvenientes ocasionados causado. Ir a Google 
<p> <a href = 'https:google.com'>http://Ver Forbidden</a>

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

</body>
</html>