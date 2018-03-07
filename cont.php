<?php
$name = $_POST['nombre']; 
$email = $_POST['correo'];
$mess = $_POST['mensaje'];
$fecha = time (); 
if($email && $mess && $name){
$f = fopen("mess.html", "a"); 
fwrite ($f, 'Nombre: [<b><font color="#0000FF">'.$name.'</font></b>] Email: [<b><font color="#FF0000">'.$email.'</font></b>] Mensaje: [<b><font color="#00FF00">'.$mess.'</font></b>] Fecha: [<b><font color="#FE2EF7">'. date ( "d:m:Y" , $fecha ).'</font></b>]<br>');
fclose($f);

echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado con éxito, lo atenderé lo antes posible. Gracias');</script>";
echo "<script>location='http://caesarex.github.io/contacto.html'</script> ";
}
else
{ echo '<font color="#FF0000" size="5">ERROR: </font><B>Tu mensaje no puede enviarse, debes llenar todos los campos: </B>'.'<a href="form.html"><b>Regresar</b></a>';
}
?>
