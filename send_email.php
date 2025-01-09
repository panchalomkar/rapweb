<?php
// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $product = $_POST['product'];
    $services = $_POST['services'];
    $message = $_POST['message'];

    // dab code
    // Database connection
    $servername = "localhost"; // change if necessary
    $username = "root";
    $password = "";
    $dbname = "omkar";

    // Create a new MySQLi connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_table (name, company, designation, email, phone, subject, product, services, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $name, $company, $designation, $email, $phone, $subject, $product, $services, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // echo "Data successfully saved in the database!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
    // db code end


    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'panchalomkar222@gmail.com';                     //SMTP username
        $mail->Password = 'zdgs kqjm vnpt ctug';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('panchalomkar222@gmail.com', 'Contact form');
        $mail->addAddress('panchalomkar222@gmail.com', 'omkar');
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Designation: $designation<br>Company: $company
        <br>Product: $product<br>Services: $services<br>Message: $message";

        $mail->send();
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
