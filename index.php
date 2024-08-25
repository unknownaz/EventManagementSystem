<?php

require_once('session.php');
require_once('function.php');


if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <link rel="shortcut icon" href="Background Image.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
      body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: url('Background Image.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #fff;
    text-align: center;
    }

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #272727;
    padding: 1rem 0.5rem;
}
.navbar a {
    color: white;
    text-decoration: none;
    margin: 0 1rem;
    font-weight: 600;
}
.navbar a:hover {
    color: rgb(206, 204, 204);
}
.navbar .nav-left a {
    font-size: 1.2rem;
}
.navbar .nav-right a {
    background-color: rgb(230, 179, 85);
    padding: 0.5rem 1rem;
    border-radius: 10px;
    font-size: 1rem;
}

.navbar .nav-right a:hover {
    background-color: rgb(231, 162, 33);
    color: white;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 90vh;
    padding: 20px;
    background: rgba(0, 0, 0, 0.5);
}

h1 {
    font-size: 3em;
    margin: 0.5em 0;
}
p {
    font-size: 1.2em;
    margin: 0.5em 0 2em;
}
.links {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}
.links a {
    text-decoration: none;
    padding: 15px 30px;
    border-radius: 30px;
    background: rgba(255, 255, 255, 0.4);
    color: #fff;
    font-weight: 600;
    transition: background 0.3s, transform 0.3s;
    display: flex;
    align-items: center;
    gap: 10px;
}
.links a:hover {
    background: rgba(255, 255, 255, 0.5);
    transform: scale(1.05);
}

.footer {
    background: #111;
    padding: 10px 20px;
}
.footer .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
    gap: 10px;
}
.footer .box-container .box h3 {
    font-size: 1.5rem;
    padding: 0.5rem 0;
    color: #fff;
}
.footer .box-container .box a {
    display: block;
    font-size: 0.9rem;
    padding: 0.3rem 0;
    color: #eee;
}
.footer .box-container .box a i {
    padding-right: 0.3rem;
}
.footer .box-container .box a:hover i {
    padding-right: 0.5rem;
    color: #fff;
}
footer {
    text-align: center;
    background-color: #111;
    padding-bottom: 14px;
}


@media (max-width: 768px) {
    h1 {
        font-size: 2.5em;
    }
    p {
        font-size: 1em;
    }
    .links a {
        padding: 12px 25px;
        font-size: 0.9em;
    }
    .footer .box-container .box h3 {
        font-size: 1.2rem;
    }
    .footer .box-container .box a {
        font-size: 0.8rem;
    }
    .navbar {
        align-items: center;
    }
    .navbar .nav-left, .navbar .nav-right {
        margin: 10px 0;
    }
    .navbar a {
        margin: 0 0.5rem;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 2em;
    }
    p {
        font-size: 0.9em;
    }
    .links {
        flex-direction: column;
        gap: 15px;
    }
    .links a {
        padding: 10px 20px;
        font-size: 0.8em;
    }
    .footer .box-container {
        grid-template-columns: 1fr;
    }
    .footer .box-container .box h3 {
        font-size: 1rem;
    }
    .footer .box-container .box a {
        font-size: 0.75rem;
    }
    .navbar {
        padding: 0.5rem;
    }
    .navbar a {
        font-size: 0.9rem;
        margin: 0 0.5rem; 
    }
}
    </style>
</head>
<body>
  <nav class="navbar">
    <div class="nav-left">
        <a href="index.php">Home</a>
        <a href="about.html">About</a>
    </div>
    <div class="nav-right">
    <?php if (isset($_SESSION['id'])): ?>
            <a href="logout.php">Log Out</a>
        <?php else: ?>
            <a href="login.php">Log In</a>
            <a href="signup.php">Sign Up</a>
        <?php endif; ?>
    </div>
  </nav>
    <div class="container">
        <h1>EventWizards - An Event Management System</h1>
        <p>Your one-stop solution for managing and attending events effortlessly</p>
        <div class="links">
            <a href="eventCreation.php">
                <i class="fas fa-calendar-plus"></i> Event Creation
            </a>
            <a href="ticketBooking.php">
                <i class="fas fa-ticket-alt"></i> Ticket Booking
            </a>
            <a href="attendeeManagement.php">
                <i class="fas fa-users"></i> Attendee Management
            </a>
            <a href="eventCalender.html">
                <i class="fas fa-calendar-alt"></i> Event Calendar
            </a>
        </div>
    </div>
    <section class="footer">
        <div class="box-container">
          <div class="box">
            <h3>branches</h3>
            <a><i class="fas fa-map-marker-alt"></i> lahore </a>
            <a><i class="fas fa-map-marker-alt"></i> karachi </a>
            <a><i class="fas fa-map-marker-alt"></i> islamabad </a>
            <a><i class="fas fa-map-marker-alt"></i> sheikhupura </a>
          </div>
  
          <div class="box">
            <h3>contact info</h3>
            <a><i class="fas fa-phone"></i> 0326-4713441 </a>
            <a><i class="fas fa-phone"></i> 0334-7190799 </a>
            <a><i class="fas fa-phone"></i> 0322-1175598 </a>
            <a><i class="fas fa-envelope"></i> zainbashir926@gmail.com </a>
          </div>
  
          <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://pk.linkedin.com/" target="_blank"> <i class="fab fa-linkedin-in"></i> linkedin </a>
          </div>
        </div>
        </section>
    <footer>&copy; 2024 EventWizards. All rights reserved.</footer>
</body>
</html>