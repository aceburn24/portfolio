<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));

    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        $error = "Please fill in all fields correctly.";
    } else {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'spicyburns90@gmail.com'; // SMTP username
            $mail->Password   = 'woikncndfkqysjba'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('spicyburns90@gmail.com', 'Contact Form');
            $mail->addAddress('manettefernandez@gmail.com', 'Recipient Name'); 

            // Content
            $mail->isHTML(true); 
            $mail->Subject = "New Contact from $name";
            $mail->Body    = "Name: $name<br>Email: $email<br><br>Message:<br>$message";
            $mail->AltBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            $success = "Thank you, your message has been sent.";
        } catch (Exception $e) {
            $error = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./assets/contact_style.css">
</head>
<body>
<?php include 'header.php'; ?>
    <main>
        <section>
            <h2>Contact Me</h2>
            <?php
            if (!empty($error)) {
                echo '<p class="error">' . $error . '</p>';
            }
            if (!empty($success)) {
                echo '<p class="success">' . $success . '</p>';
            }
            ?>
            <form action="contact.php" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" required></textarea><br>
                
                <input type="submit" value="Send">
            </form>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
