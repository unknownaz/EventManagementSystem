<?php
      require_once("connection.php");
      require_once("function.php");

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $attendeeData = $_POST; 
          $result = attendeeManagement($conn, $attendeeData); 
      
          if ($result) {
              header("Location: attendeeAdded.html");
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
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: grey;
    margin: 0;
    padding: 0;
    }
.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px 20px 30px 20px;
    background-color: rgb(48, 46, 46);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 8px;
}
h1 {
    text-align: center;
    color: #ebebeb;
}
form {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}
label {
    margin-bottom: 10px;
    color: #ebebeb;
}
input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button {
    padding: 10px;
    color: #ebebeb;
    background-color: #5cb85c;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #4cae4c;
}
a {
    color: black;

}
footer {
    color: #ebebeb;
    position: fixed;
    bottom: 0;
}

@media (max-width: 768px) {
    .container {
        margin: 30px auto;
        padding: 15px;
    }
    h1 {
        font-size: 28px;
    }
    label {
        font-size: 16px;
    }
    input, button {
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .container {
        margin: 20px auto;
        padding: 10px;
    }
    h1 {
        font-size: 24px;
    }
    label {
        font-size: 14px;
    }
    input, button {
        font-size: 14px;
    }
    a {
        font-size: 14px;
    }
}
    </style>
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

            <button type="submit" name="submit">Add Attendee</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 EventWizards. All rights reserved.</p>
    </footer>
</body>
</html>