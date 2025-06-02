<?php
if (isset($_POST['submit'])) {
    $para = $_POST['email'];
    $titulo = $_POST['subject'];
    $msg = $_POST['msg'];
    $header = "From: pedro.henrique514889@gmail.com\r\n"; // Altere para um email válido

    if (mail($para, $titulo, $msg, $header)) {
        echo "Email enviado";
    } else {
        echo "Email não enviado";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Email</title>
</head>
<body>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="subject">Assunto:</label>
        <input type="text" name="subject" required>
        <label for="msg">Mensagem:</label>
        <textarea name="msg" required></textarea>
        <button name="submit">Enviar</button>
    </form>
</body>
</html>
