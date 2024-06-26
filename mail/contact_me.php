<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'franklinriofriopanta@gmail.com'; //Agregue su dirección de correo electrónico entre el "" reemplazando yourname@yourdomain.com - Aquí es donde el formulario enviará un mensaje.
$email_subject = "Website Contact Form:  $name";
$email_body = "Ha recibido un nuevo mensaje del formulario de contacto de su sitio web.\n\n"."Aquí están los detalles:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "noreply@yourdomain.com\n"; //Esta es la dirección de correo electrónico de la que procederá el mensaje generado. Recomendamos utilizar algo como noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>