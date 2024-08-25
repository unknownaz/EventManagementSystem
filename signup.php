<?php
require_once('function.php');
if (isset($_POST['submit'])) {
    $signup = signup($conn, $_POST);
    if ($signup) {
        header("location:signupSuccessful.html");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - EventWizards</title>
    <link rel="shortcut icon" href="Background Image.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="signup.css">
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: black;
    position: relative;
    overflow: hidden;
    }

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('Background Image.jpg') no-repeat center center fixed;
    background-size: cover;
    opacity: 0.5;
    z-index: -1;
}

.signup-container {
    width: 100%;
    max-width: 350px;
    padding: 20px;
    border-radius: 10px;
    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.signup-container h2 {
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
    color: #333;
}
.signup-container input {
    width: 90%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s;
}
.signup-container input:focus {
    border-color: rgb(241, 143, 63);
}
.signup-container button {
    width: 97%;
    padding: 12px;
    border: none;
    background-color: rgb(241, 143, 63);
    color: white;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.signup-container button:hover {
    background-color: rgb(236, 132, 47);
}
.signup-container p {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #777;
}
.signup-container a {
    color: rgb(241, 143, 63);
    text-decoration: none;
    font-weight: 600;
}
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Log In</a></p>
    </div>
</body>
</html>