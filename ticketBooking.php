<?php
require_once("connection.php"); 
require_once("function.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticketData = $_POST; 
    $result = bookTickets($conn, $ticketData);

    if ($result) {
        header("Location: bookingCompletion.html");
        exit();
    } else {
        echo "Ticket booking failed.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
    <link rel="shortcut icon" href="Background Image.jpg" type="image/x-icon">
    <link rel="stylesheet" href="ticketBooking.css"></style>
</head>
<body>
    <a href="index.php"><b>Go back to the main page</b></a>
    <div class="container">
        <h1>Book Your Tickets</h1>
        <form action="" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="event">Select Event:</label>
            <select id="event" name="event" onchange="updatePrice()" required>
                <option value="cultural_festival">Cultural Festival - PKR 6000</option>
                <option value="concert">Concert - PKR 8000</option>
                <option value="conference">Conference - PKR 15000</option>
                <option value="seminar">Seminar - PKR 12000</option>
                <option value="custom">Custom - PKR 5000</option>
            </select>
            
            <label for="tickets">Number of Tickets:</label>
            <input type="number" id="tickets" name="tickets" min="1" max="100" onchange="updatePrice()" required>
            
            <button type="submit" name="submit">Book Now</button>
        </form>
        <div class="total-price" id="total-price">Total Price: PKR 0.00</div>
    </div>
    <footer>
        <p>&copy; 2024 EventWizards. All rights reserved.</p>
    </footer>
</body>
<script src="ticketBooking.js"></script>
</html>