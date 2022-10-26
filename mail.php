
<?php
$name = $_POST['nombre']; //'name' has to be the same as the name value on the form input element
$email = $_POST['correo'];
$phone = $_POST['telefono'];
$area = $_POST['area'];
$message = $_POST['message'];
$human = $_POST['human'];
$from = $_POST['correo'];
$to = 'libertasabogadosbilbao@gmail.com'; //set to the default email address
$subject = $_POST['area'];
$body = "De: $name\n Correo: $email\n Telefono: $phone\n Busca ayuda con: $area\n Message:\n $message";

$headers = "De: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(isset($_POST['submit']) && ($_POST['human']) == '4') {               
mail ($to, $subject, $body, $headers);  //mail sends it to the SMTP server side which sends the email
    echo "<p>Hemos recibido su mensaje. Gracias!</p><br/><h2><a href='http://libertasabogados.net'>Volver a Libertas Abogados</a></h2>";
    return true;
} 

else { 
    echo "<p>Ha habido un fallo con su mensaje. Por favor intentalo de nuevo.</p>"; 
    return false;
} 
if (!isset($_POST['submit']) && ($_POST['human']) != '4') {
echo "<p>El anti-spam es incorrecto</p>";
}
?>
