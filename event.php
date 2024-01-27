<?php
// Database credentials
$servername = "localhost";
$username = "Abc";
$password = "Pakistan@123";
$dbname = "Event Management System";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {<?php
    // Database credentials
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";
    
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Example query to retrieve events from the database
    $query = "SELECT * FROM events";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        // Loop through each row and display event details
        while ($row = $result->fetch_assoc()) {
            echo "Event Name: " . $row["event_name"] . "<br>";
            echo "Event Date: " . $row["event_date"] . "<br>";
            echo "Location: " . $row["event_location"] . "<br><br>";
        }
    } else {
        echo "No events found.";
    }
    
    // Close the database connection
    $conn->close();
    ?>
    die("Connection failed: " . $conn->connect_error);
}

// Example query to retrieve events from the database
$query = "SELECT * FROM events";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Loop through each row and display event details
    while ($row = $result->fetch_assoc()) {
        echo "Event Name: " . $row["event_name"] . "<br>";
        echo "Event Date: " . $row["event_date"] . "<br>";
        echo "Location: " . $row["event_location"] . "<br><br>";
    }
} else {
    echo "No events found.";
}

// Close the database connection
$conn->close();
?>