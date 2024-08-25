<?php
require_once("connection.php");
require_once("function.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventData = $_POST; 
    $result = createEvent($conn, $eventData);

    if ($result) {
        header("Location: completionCreation.html");
        exit();
    } else {
        echo "Event creation failed.";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Background Image.jpg" type="image/x-icon">
    <title>Event Creation</title>
    <link rel="stylesheet" href="eventCreation.css">
</head>
<body>
    <a href="index.php"><b>Go back to the main page</b></a>
    <header></header>
    <h1>Event Creation</h1>
    </header>
    <hr>
        
    <main>
        <div class="container">
        <h2>Create a New Event</h2>
        <form action="" method="POST" id="eventCreationForm">
                <label for="eventName">Event Name:</label>
                <input type="text" id="eventName" name="eventName" required>
            <br>
                <label for="eventDate">Event Date:</label>
                <input type="date" id="eventDate" name="eventDate" required>
            <br>
                <label for="eventTime">Event Time:</label>
                <input type="time" id="eventTime" name="eventTime" required>
            <br>
                <label for="eventLocation">Event Location:</label>
                <input type="text" id="eventLocation" name="eventLocation" required>
            <br>
                <label for="eventDescription">Event Description:</label>
                <textarea id="eventDescription" name="eventDescription" rows="5" required></textarea>
            <br>
                <button type="submit" name="button">Create Event</button>
        </form>
    </div>
    </main>

    <footer>
        <p>&copy; 2024 EventWizards. All rights reserved.</p>
    </footer>
</body>
</html>