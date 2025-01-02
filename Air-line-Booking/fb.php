
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Booking and Payment</title>
    <style>
        .background {
            background-image: url(i8.png);
            background-size: cover;
            min-height: 100vh;
        }
        table {
            border-collapse: collapse;
            width: 400px;
            margin: 20px auto;
            height: auto;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        td {
            border: 1px solid black;
            padding: 12px;
            text-align: left;
        }
        input {
            height: 30px;
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }
        button {
            width: 100%;
            height: 40px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
    <style>
    /* CSS Styles */
    .booking-confirmation {
        width: 100%;
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        font-family: Arial, sans-serif;
        color: #333;
    }

    .booking-confirmation h1 {
        font-size: 28px;
        color: #28a745;
        text-align: center;
    }

    .booking-confirmation h2 {
        font-size: 22px;
        color: #007bff;
        text-align: center;
    }

    .booking-confirmation p {
        font-size: 16px;
        line-height: 1.6;
    }

    .booking-confirmation strong {
        color: #555;
    }

    .booking-confirmation p:last-child {
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: #28a745;
    }
</style>
</head>
<body class="background">
<table>
    <tr>
        <td>
        <form action="fb.php" method="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
            
            <label for="passport">Passport Number:</label>
            <input type="text" id="passport" name="passport" placeholder="Passport Number" required>
            
            <label for="dob">DOB:</label>
            <input type="date" id="dob" name="dob" required>
            
            <label for="giftCode">Gift Code:</label>
            <input type="text" id="giftCode" name="giftCode" placeholder="If you have!">
            
            <a href="index.php"><button type="submit">Payment</button> </a>
        </form>
        </td>
    </tr>
</table>
</body>
</html>
<?php
session_start();

// Database credentials
$server = "localhost";
$username = "root";
$password = "arya1306";
$db = "detail";  // Ensure this is the correct database name

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ensure all fields are set
    if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['passport'], $_POST['dob'])) {

        // Generate a unique PNR (Booking Reference Number)
        $pnr = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));

        // Prepare SQL query for inserting the form data into the database
        $stmt = $conn->prepare("INSERT INTO detail (Firstname, Lastname, Email, Phoneno, Passportno, dob, giftcode, PNR) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        // Execute the statement with form data
        if ($stmt->execute([
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['passport'],
            $_POST['dob'],
            $_POST['giftCode'] ?? 'N/A',  // Handle gift code (if provided)
            $pnr
        ])) {
            // Get the last inserted booking ID
            $lastBookingId = $conn->lastInsertId();

            // Generate a response with booking details
            echo "<!DOCTYPE html>";
            echo "<html lang='en'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Booking Confirmation</title>";
            echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
            echo "<style>
                    .booking-confirmation {
                        width: 100%;
                        max-width: 600px;
                        margin: 30px auto;
                        padding: 20px;
                        background-color: #f9f9f9;
                        border: 1px solid #e0e0e0;
                        border-radius: 8px;
                        font-family: Arial, sans-serif;
                        color: #333;
                    }
                    .booking-confirmation h1 {
                        font-size: 28px;
                        color: #28a745;
                        text-align: center;
                    }
                    .booking-confirmation h2 {
                        font-size: 22px;
                        color: #007bff;
                        text-align: center;
                    }
                    .booking-confirmation p {
                        font-size: 16px;
                        line-height: 1.6;
                    }
                    .booking-confirmation strong {
                        color: #555;
                    }
                    .booking-confirmation p:last-child {
                        text-align: center;
                        font-size: 18px;
                        font-weight: bold;
                        color: #28a745;
                    }
                  </style>";
            echo "</head>";
            echo "<body>";

            // Show booking details in a nicely formatted box
            echo "<div class='booking-confirmation'>";
            echo "<h1>Booking Successful!</h1>";
            echo "<h2>Your PNR: " . $pnr . "</h2>";
            echo "<p>Thank you for booking with us! Below are your booking details:</p>";
            echo "<p><strong>First Name:</strong> " . htmlspecialchars($_POST['firstName']) . "</p>";
            echo "<p><strong>Last Name:</strong> " . htmlspecialchars($_POST['lastName']) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
            echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($_POST['phone']) . "</p>";
            echo "<p><strong>Passport Number:</strong> " . htmlspecialchars($_POST['passport']) . "</p>";
            echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($_POST['dob']) . "</p>";
            echo "<p><strong>Gift Code:</strong> " . htmlspecialchars($_POST['giftCode'] ?? 'N/A') . "</p>";
            echo "<p><strong>Booking ID:</strong> " . $lastBookingId . "</p>";
            echo "<p>Your ticket has been booked successfully.</p>";
            echo "</div>";

            echo "</body>";
            echo "</html>";

        } else {
            // If execute fails, show the error
            echo "<p>There was an error processing your booking. Please try again.</p>";
        }

    } else {
        // Handle the case where the required POST data is not set
        echo "<p>Error: Some form fields are missing. Please go back and fill all the required fields.</p>";
    }

} catch (PDOException $e) {
    // Catch any PDO errors and display them
    echo "<p>Error: " . $e->getMessage() . "</p>";
}
