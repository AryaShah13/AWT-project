<?php
$server = "localhost";
$username = "root";
$pass = "arya1306";
$db = "book";
$conn = mysqli_connect($server, $username, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$from = mysqli_real_escape_string($conn, $_POST['from']);
$to = mysqli_real_escape_string($conn, $_POST['to']);
$departure_date = mysqli_real_escape_string($conn, $_POST['departureDate']);
$trip_type = mysqli_real_escape_string($conn, $_POST['tripType']);
$passengers = (int)mysqli_real_escape_string($conn, $_POST['passengers']);
$class = mysqli_real_escape_string($conn, $_POST['class']);
$sql = "SELECT * FROM flight 
        WHERE `from` = '$from' 
        AND `to` = '$to' 
        AND `ddate` = '$departure_date' 
        AND `seats` >= $passengers 
        AND `seats` <=20
        AND (class = '$class' OR class = 'both')";

$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    echo "<h2>Available Flights</h2>";
    while ($row = $result->fetch_assoc()) {
       
        echo "<p>From: " . $row['from'] . " To: " . $row['to'] . "</p>";
        echo "<p>Departure Date: " . $row['ddate'] . "</p>";
        echo "<p>Available Seats: " . $row['seats'] . "</p>";
        echo "<p>Class: " . $row['class'] . "</p>";
    }
} else {
    echo "<h2>No flights available for the selected criteria.</h2>";
}
$conn->close();
?>
