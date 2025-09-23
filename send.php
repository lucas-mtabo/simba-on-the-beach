<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = htmlspecialchars(trim($_POST['destination']));
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $date = htmlspecialchars(trim($_POST['date']));
    $people = htmlspecialchars(trim($_POST['people']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation
    if(!$destination || !$name || !$email || !$date || !$people) {
        header("Location: booking-result.php?status=error&message=" . urlencode("Please fill in all required fields."));
        exit;
    }

    $to = "info@simbaonbeach.com";
    $subject = "New Booking from $name";
    $body = "Booking Details:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Destination: $destination\n".
            "Start Date: $date\n".
            "Number of People: $people\n".
            "Special Requests:\n$message\n";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)) {
        header("Location: booking-result.php?status=success&message=" . urlencode("Thank you! Your booking has been sent."));
    } else {
        header("Location: booking-result.php?status=error&message=" . urlencode("Sorry, we could not send your booking. Please try again later."));
    }
    exit;
} else {
    header("Location: book.php");
    exit;
}
