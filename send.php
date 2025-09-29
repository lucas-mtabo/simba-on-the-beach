<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = htmlspecialchars($_POST['destination']);
    $name        = htmlspecialchars($_POST['name']);
    $email       = htmlspecialchars($_POST['email']);
    $date        = htmlspecialchars($_POST['date']);
    $people      = htmlspecialchars($_POST['people']);
    $message     = htmlspecialchars($_POST['message']);

    $to      = "info@simbaonbeach.com"; // your Host email
    $subject = "New Booking Request from $name";
    $body    = "Destination: $destination\n".
               "Name: $name\n".
               "Email: $email\n".
               "Start Date: $date\n".
               "Number of People: $people\n".
               "Special Requests: $message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: booking-result.php?status=success");
        exit();
    } else {
        header("Location: booking-result.php?status=error");
        exit();
    }
} else {
    header("Location: booking.php");
    exit();
}
?>
