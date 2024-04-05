<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL database (change these parameters according to your MySQL configuration)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "traveldb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    header("location:ticketview.php");
}
?>
