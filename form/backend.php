<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
}else{
    header('location: index.html');
    exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Message</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="message_body">
            <div class="name">
                <p>Hi <?= $name ?>, Thank you for your message.</p>
            </div>
            <div class="email">
                <p><?= $email ?></p>
            </div>
            <div class="message">
                <p><?= $message ?></p>
            </div>
        </div>
    </body>
</html>