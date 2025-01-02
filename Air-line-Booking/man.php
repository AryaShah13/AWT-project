<html >
<head>
    <title>Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 20px;
            text-align: left;
            vertical-align: middle;
        }
        th {
            background-color: blueviolet;
            color: white;
            font-size: 1.5em;
        }
        td {
            background-color: #f5f5f5;
        }
        input[type="text"], input[type="date"], select {
            height: 30px;
            width: 150px;
            padding: 5px;
            margin: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            height: 40px;
            padding: 0 20px;
            color: white;
            background-color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkred;
        }
        label {
            font-weight: bold;
        }
        .form-section {
            margin-top: 50px;
        }
        #returnDateSection {
            display: none;
        }
    </style>
    <script>
        // JavaScript to toggle the display of the return date
        function toggleReturnDate(show) {
            const returnDateSection = document.getElementById("returnDateSection");
            if (show) {
                returnDateSection.style.display = "block";
            } else {
                returnDateSection.style.display = "none";
            }
        }
    </script>
</head>
<body>

<form method="POST" action="book.php">
        <table>
            <!-- Row for FROM, TO, Trip Type -->
            <tr>
                <th colspan="2">Flight Search Form</th>
            </tr>
            <tr>
                <td>
                    <label for="from">From:</label>
                    <input type="text" id="from" name="from" required placeholder="FROM">
                    <img src="ds1.png" style="height: 20px; width: 20px;" alt="Icon">

                    <label for="to">To:</label>
                    <input type="text" id="to" name="to" required placeholder="TO">
                </td>
                <td>
                    <label>Trip Type:</label>
                    <input type="radio" id="oneWay" name="tripType" value="one-way" onclick="toggleReturnDate(false)" checked> One-Way
                    <input type="radio" id="roundTrip" name="tripType" value="round-trip" onclick="toggleReturnDate(true)"> Round Trip
                </td>
            </tr>
            <!-- Row for Departure Date, Passengers, and Class -->
            <tr>
                <td>
                    <label for="departureDate">Departure Date:</label>
                    <input type="date" id="departureDate" name="departureDate" required>
                </td>
                <td>
                    <label for="passengers">Number of Passengers:</label>
                    <select id="passengers" name="passengers">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <!-- Row for Class Selection and Submit Button -->
            <tr>
                <td>
                    <label for="class">Class:</label>
                    <select id="class" name="class">
                        <option value="Economy">Economy</option>
                        <option value="Business">Business</option>
                    </select>
                </td>
                <td>
                    <input type="submit" value="Search">
                </td>
            </tr>
            <!-- Row for Return Date (shown only for round trips) -->
            <tr id="returnDateSection">
                <td colspan="2">
                    <label for="returnDate">Return Date:</label>
                    <input type="date" id="returnDate" name="returnDate">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


