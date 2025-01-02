
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Flights</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 20px;
        }
        .nav{
            display: flex;

        }
        .nav img{
            margin-left: 15%;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-left: 20%;
        }

        .ticket {
            background-color: #fff;
            border: 2px solid red; 
            border-radius: 8px;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .ticket h3 {
            text-align: center;
            color: red; 
        }

        .ticket p {
            margin: 5px 0;
            color: #555;
        }

        .ticket strong {
            color: #333; /* Darker color for labels */
        }
        .ticket button{
           float: right ;
           background-color: red;
           color: white;
           border-radius: 10%;
           
        }
    </style>
</head>
<body>
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
   
   // Construct the SQL query
   $sql = "SELECT * FROM flight
           WHERE `from` = '$from' 
           AND `to` = '$to' 
           AND `Ddate` = '$departure_date'";
   
   // Execute the query
   $result = $conn->query($sql);
   
   // Check if query returned rows
   if ($result && $result->num_rows > 0) {
       echo "<div class='nav'>";
       echo "<img src=\"logo.png\" style=\"height:40px;width:175px;padding-left:10px\"> <h2>Available Flights</h2>";
       echo "</div>"; 
       echo "<p>Number of flights found: " . $result->num_rows . "</p>"; 
       while ($row = $result->fetch_assoc()) {
           echo "<div class='ticket'>";
           echo "<h3>Flight Ticket</h3>";
           echo "<p><strong>From:</strong> " . $row['From'] . "</p>";
           echo "<p><strong>To:</strong> " . $row['To'] . "</p>";
           echo "<div class=buttton>";
           echo "<a href='fb.php'><button>TICKET BOOK</button></a>";

           echo "</div>";
           echo "<p><strong>Departure Date:</strong> " . $row['Ddate'] . "</p>";
           echo "<p><strong>Available Seats:</strong> " . $row['seat'] . "</p>";

           echo "<p><strong>Class:</strong> " . $row['class'] . "</p>";
           echo "<p><strong>Flight Number:</strong> " . $row['flightno'] . "</p>";
           echo "</div>"; 
       }
   } else {
       echo "<h2>No flights available for the selected criteria.</h2>";
   }
   $conn->close();
?>
</body>
</html>
