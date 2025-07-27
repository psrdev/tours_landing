<?php

require __DIR__ . '/src/bootstrap.php';


use App\Router;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Initialize the router
$router = new Router();

// Register routes
$router->get('/', function () {
    ob_start();
    $title = "Home Page";
    include __DIR__ . '/src/views/home.php';
    return ob_get_clean();
});
$router->get('/thank-you', function () {
    ob_start();
    $title = "Thank You";
    include __DIR__ . '/src/views/thank-you.php';
    return ob_get_clean();
});




$router->post('/contact', function () {


    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $date = htmlspecialchars(trim($_POST['date'] ?? ''));
    $person = htmlspecialchars(trim($_POST['person'] ?? ''));
    $package = htmlspecialchars(trim($_POST['package'] ?? ''));

    if (!$name || !$email || !$phone || !$date) {
        http_response_code(400);
        return 'Missing required fields.';
    }

    $subject = "New Travel Enquiry from $name";
    $body = "
        <h2>New Travel Enquiry</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Travel Date:</strong> {$date}</p>
        <p><strong>No. of Persons:</strong> {$person}</p>
        <p><strong>Selected Package:</strong> {$package}</p>
    ";

    try {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];

        // Encryption setup
        $encryption = strtolower($_ENV['MAIL_ENCRYPTION']);
        if ($encryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
        } elseif ($encryption === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        } else {
            $mail->SMTPSecure = false;
            $mail->Port = $_ENV['MAIL_PORT'];
        }

        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME'] ?? 'Website Enquiry');
        $mail->addAddress($_ENV['MAIL_USERNAME']); // Send to yourself

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();

        header('Location: /thank-you');
        exit;
    } catch (Exception $e) {
        http_response_code(500);
        return "Mailer Error: {$mail->ErrorInfo}";
    }
});


// Dispatch request
$router->dispatch();
