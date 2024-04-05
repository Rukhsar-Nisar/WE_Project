


<?php
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

// Fetch data from the bookings table
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>home</title>
    <!--swiper cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

        <div class="header">
            <a href="home.html" class="logo">Travel.</a>
            <div class="registerLogin" style="display: flex; flex-direction: row; font-size: 15px; font-weight: 600; color: rgb(15, 15, 15);">
                <div class="signup" style="padding: 5px; margin-right: 5px;"><a href="Register.html">Signup</a></div>
                <div class="signin" style="padding: 5px;"><a href="login.html">Signin</a></div>
            </div>
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="package.html">Package</a>
                <a href="book.php">Book</a>
                <a href="ticketview.php">Orders</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        
        <div class="heading" style="background: url(media/home3.jpg) no-repeat">
            <h1>Booking Details</h1>
        </div>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Heading */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        /* Table row hover effect */
        tbody tr:hover {
            background-color: #f9f9f9;
        }

        /* Responsive table */
        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
            }
            th, td {
                white-space: nowrap;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Booking Details</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Location</th>
                <th>Guests</th>
                <th>Arrival Date</th>
                <th>Leaving Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Output data of each row
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["phone"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["location"]."</td>";
                echo "<td>".$row["guests"]."</td>";
                echo "<td>".$row["arrivals"]."</td>";
                echo "<td>".$row["leaving"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No bookings found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
// Close connection
$conn->close();
?>