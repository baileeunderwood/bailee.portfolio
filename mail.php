<?php
    If($_SERVER["REQUEST_METHOD"]=="POST"){

        $mail_to = "underwbm@clarkson.edu";

        # SENDER DATA
        $subject = trim($post["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," "),strip_tags(trim($_POST["name"])));
        $phone = trim($_POST["phone"]);
        $message = trim($_post["message"]);
            if( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message))
             # Set a 400 (bad request) response code and exit
                http_response_code(400);
                echo "please complete the form and try again.";
                exit;
    }