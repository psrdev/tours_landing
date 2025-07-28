<?php

require __DIR__ . '/src/bootstrap.php';

use App\Router;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ✅ Handle subdirectory (e.g., /packages)
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if (strpos($_SERVER['REQUEST_URI'], $basePath) === 0) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($basePath));
}

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

$router->post('/packages/contact', function () use ($basePath) {
    // Sanitize and validate input
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

        // Debugging output
        $mail->SMTPDebug = 3;
        $mail->Debugoutput = function ($str, $level) {
            error_log("SMTP DEBUG [$level]: $str");
        };

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use TLS for port 587 or ENCRYPTION_SMTPS for 465
        $mail->Port = 465;
        $mail->Timeout = 10; // seconds

        // Sender and recipient
        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME'] ?? 'Website Enquiry');
        $mail->addAddress("psranadeveloper@gmail.com");

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Send the mail
        $mail->send();

        // Redirect to thank-you page
        header("Location: {$basePath}/thank-you");
        exit;
    } catch (Exception $e) {
        error_log("Mailer Exception: " . $mail->ErrorInfo);
        http_response_code(500);
        return "Mailer Error: " . $mail->ErrorInfo;
    }
});


// Dispatch request
$router->dispatch();

