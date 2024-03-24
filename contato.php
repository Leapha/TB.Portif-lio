<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = 'inevitavel55@gmail.com'; // Substitua pelo seu endereço de e-mail
        $subject = 'Nova mensagem do formulário de contato';

        $headers = "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $name <$email>" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

        $success = mail($to, $subject, $message, $headers);

        if ($success) {
            http_response_code(200);
            echo "Mensagem enviada com sucesso!";
        } else {
            http_response_code(500);
            echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
        }
    } else {
        http_response_code(403);
        echo "Ocorreu um erro ao processar o formulário.";
    }
    ?>