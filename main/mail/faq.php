<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # FIX: Replace this email with recipient email
        $mail_to = "kouraogoisidore@gmail.com";
        
        # Sender Data
        //$subject = trim($_POST["subject"]);
		$subject = trim($_POST["ecount"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $phone = trim($_POST["phone"]);
		$emess = trim($_POST["emess"]);
        //$message = trim($_POST["message"]);
        
        if ( empty($name) OR empty($phone)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Veuillez remplir le formulaire.";
            exit;
        }
        
        # Mail Content
        $content = "Name: $name\n";
		$content .= "Phone: $phone\n";
		$content .= "Message: $emess\n";
        //$content .= "Message:\n$message\n";

        # email headers.
        $headers = "From: $name";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
			// Thank you message
            http_response_code(200);
            echo "Merci pour votre message. Notre équipe réagira dans les minutes qui suivent!";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Merci de renvoyer le message.";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Erreur. Merci de renvoyer le message.";
    }

?>
