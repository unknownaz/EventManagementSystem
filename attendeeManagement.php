<?php
      require_once("connection.php");
      require_once("function.php");

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $attendeeData = $_POST; 
          $result = attendeeManagement($conn, $attendeeData); 
      
          if ($result) {
              header("Location: attendeeManagement.php");
              exit();
          } else {
              echo "Entry of Attendee failed.";
          }
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Background Image.jpg" type="image/x-icon">
    <title>Attendee Management</title>
    <link rel="stylesheet" href="attendeeManagement.css">
</head>
<body>
    <a href="index.php"><b>Go back to the main page</b></a>
    <div class="container">
        <h1>Attendee Management</h1>
        <form action="" id="attendee-form" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>

            <button type="submit" name="submit" onsubmit="addAttendee(event)">Add Attendee</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody id="attendee-list">
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2024 EventWizards. All rights reserved.</p>
    </footer>
</body>
<script src="attendeeManagement.js"></script>
</html>