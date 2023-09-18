<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Include Composer autoload.php file
require 'vendor/autoload.php';

// Create object of PHPMailer class
$mail = new PHPMailer(true);

$output = '';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    
    $message = $_POST['message'];
    
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        
        $mail->Username = "it@mcindeez.com";
        $mail->Password = "ijghmrlslyoizkmg";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email ID from which you want to send the email
        $mail->setFrom('it@mcindeez.com');
        // Recipient Email ID where you want to receive emails
        $mail->addAddress('it@mcindeez.com');
        $mail->isHTML(true);
        $mail->Subject = 'Form Submission';
        if ($other)
        {
            $mail->Body = "<h3>Name : $name <br>Email : $email <br>Phone: $phone <br> Subject: $other <br>Message : $message</h3>";
        }
        else {
            $mail->Body = "<h3>Name : $name <br>Email : $email <br>Phone: $phone <br> Subject: $subject <br>Message : $message</h3>";
        }
        
        if (isset($_FILES['uploaded_file'])
        && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK
    ) {
        $mail->addAttachment($_FILES['uploaded_file']['tmp_name'],
                             $_FILES['uploaded_file']['name']);
    }

        $mail->send();
        echo '<script>window.location.href = "./response.html";</script>';

        $output = '<div class="alert alert-success"><h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5></div>';
    }
    catch (Exception $e) {
        echo '<script>window.location.href = "./error.html";</script>';

        $output = '<div class="alert alert-danger"><h5>' . $e->getMessage() . '</h5></div>';
    }
}
?>
