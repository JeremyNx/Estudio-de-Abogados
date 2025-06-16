<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars(trim($_POST["name"]));
    $correo = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(trim($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        // Configuración SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jeremyneux@gmail.com';
        $mail->Password = 'krwx pzei gwsz komw'; // Asegúrate que es tu app password y no tu contraseña real
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Detalles del correo
        $mail->setFrom('jeremyneux@gmail.com', 'Web Estudio Valdivia');
        $mail->addReplyTo($correo, $nombre);
        $mail->addAddress('jeremyneux@gmail.com', 'Admin');

        $mail->isHTML(true);
        $mail->Subject = 'Mensaje desde formulario';
        $mail->Body = "
            <h2>Nuevo mensaje desde la web</h2>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Correo:</strong> $correo</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
        ";

        $mail->send();

        // Enviar respuesta con código 200 (éxito)
        http_response_code(200);
        echo json_encode(["message" => "Mensaje enviado con éxito."]);
        exit();
    } catch (Exception $e) {
        // Enviar respuesta con código 500 (error del servidor)
        http_response_code(500);
        echo json_encode(["error" => "Error al enviar el mensaje."]);
        exit();
    }
}
?>
