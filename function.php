<?php
require_once("connection.php");

function signup($conn, $data)
{
    $name = $data['name'];     
    $email = $data['email']; 
    $password = $data['password'];

    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?,?,?)";

    $signup = $conn->prepare($sql);
    $signup->bind_param("sss", $name, $email, $password); 
    $signup->execute();

    if ($signup->affected_rows > 0) { 
        return true;  
    } else {
        return false;
    }
}

function login($conn, $data)
{
    $email = $data['email'];

    $sql = "SELECT `id`, `email`, `password` FROM `users` WHERE `email` = ?";

    $login = $conn->prepare($sql); 
    $login->bind_param("s", $email); 
    $login->execute(); 
    $result = $login->get_result();

    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['password']) {
            return $row; 
        } else {
            return false; 
        }
    } else {
        return false;
    }
}

function createEvent($conn, $data)
{
    $eventName = $data['eventName'];
    $eventDate = $data['eventDate'];
    $eventTime = $data['eventTime'];
    $eventLocation = $data['eventLocation'];
    $eventDescription = $data['eventDescription'];

    $sql = "INSERT INTO `event_creation` (`eventName`, `eventDate`, `eventTime`, `eventLocation`, `eventDescription`) VALUES (?, ?, ?, ?, ?)";

    $eventCreation = $conn->prepare($sql);
    $eventCreation->bind_param("sssss", $eventName, $eventDate, $eventTime, $eventLocation, $eventDescription);  // Bind the parameters to the SQL query
    $eventCreation->execute(); 

    if ($eventCreation->affected_rows > 0) {  
        return true;  
    } else {
        return false;
    }
}

function bookTickets($conn, $data)
{
    $name = $data['name'];
    $email = $data['email'];
    $event = $data['event'];
    $tickets = $data['tickets'];

    $sql = "INSERT INTO `book_tickets` (`name`, `email`, `event`, `tickets`) VALUES (?, ?, ?, ?)";

    $ticketBooking = $conn->prepare($sql);
    $ticketBooking->bind_param("sssi", $name, $email, $event, $tickets);
    $ticketBooking->execute();

    if ($ticketBooking->affected_rows > 0) { 
        return true; 
    } else {
        return false;
    }
}

function attendeeManagement($conn, $data)
{
    $name = $data['name'];
    $email = $data['email'];
    $contact = $data['contact'];

    $sql = "INSERT INTO `attendee_management` (`name`, `email`, `contact`) VALUES (?, ?, ?)";

    $attendeeManagement = $conn->prepare($sql);
    $attendeeManagement->bind_param("sss", $name, $email, $contact); 
    $attendeeManagement->execute();

    if ($attendeeManagement->affected_rows > 0) { 
        return true; 
    } else {
        return false;
    }
}


?>