<?php

$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "info@disembodiedrecords.com.ar";
$Subject = "Mensaje enviado desde disembodiedrecords.com.ar";
$Nombre = Trim(stripslashes($_POST['Nombre'])); 
$Mensaje = Trim(stripslashes($_POST['Mensaje'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (Trim($Nombre)=="") $validationOK=false;
if (Trim($Mensaje)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Contacto: ";
$Body .= $Nombre;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $Mensaje;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>