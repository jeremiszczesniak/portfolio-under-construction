<?php
    $imie = $_POST["imie"];
    $email = trim($_POST["email"]);
    $temat = $_POST["temat"];
    $wiadomosc = $_POST["wiadomosc"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Niepoprawny format adresu e-mail.";
        exit;
    }

    if (!preg_match('/\.(pl|com|org|net)$/i', $email)) {
        echo "Adres e-mail musi kończyć się na .pl, .com, .org lub .net.";
        exit;
    }

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                      
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'szczesniakjeremi@gmail.com';                     //SMTP username
    $mail->Password   = $_ENV['SMTP_PASS'];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('szczesniakjeremi@gmail.com', $imie);
    $mail->addReplyTo($email, $imie);
    $mail->addAddress('szczesniakjeremi@gmail.com', 'Jeremi');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $temat;
    $mail->Body    = "
        <p><strong>Imię:</strong> {$imie}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Wiadomość:</strong><br>" . nl2br(htmlspecialchars($wiadomosc)) . "</p>
    ";

    $mail->send();
    header("Location: wyslana.php");
} catch (Exception $e) {
    echo "Wiadomość nie została wysłana. Spróbuj ponownie.";
}

?>