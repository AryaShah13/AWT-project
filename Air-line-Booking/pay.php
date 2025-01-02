<?php
// Database connection
$con = mysqli_connect('localhost', 'root', 'arya1306', 'payment');

// Check if form is submitted and amount is valid
if (isset($_POST['payment']) && $_POST['amt'] >= 99) {
    // Collect form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $amount = mysqli_real_escape_string($con, $_POST['amt']);
    $pay_to = 'MCA Foundation (Save Tree, Save India)';

    // Include Instamojo library
    include 'Instamojo.php';

    // Instantiate the Instamojo API
    $api = new Instamojo\Instamojo('test_3fca8eebb469e6292a0003326f6', 'test_69ae86fc88c4fccf0809d1641df', 'https://test.instamojo.com/api/1.1/');

    try {
        // Create a payment request
        $response = $api->paymentRequestCreate(array(
            "purpose" => $pay_to,
            "buyer_name" => $name,  // Changed from "user_name" to "buyer_name"
            "email" => $email,
            "phone" => $phone,
            "amount" => $amount,
            "send_email" => true,
            "send_sms" => true,  // Optional, to send SMS to user
            "allow_repeated_payments" => false,
            "redirect_url" => "ty.php"  // Redirect after payment success
        ));

        // Get the payment URL
        $url = $response['longurl'];

        // Insert the transaction data into the database (no need to insert 'id' field)
        $query = "INSERT INTO transaction (name, email, phone, amount, pay_to) 
                  VALUES ('$name', '$email', '$phone', '$amount', '$pay_to')";

        // Execute the query
        $run = mysqli_query($con, $query);

        // Check if the query was successful
        if ($run) {
            // Redirect to Instamojo payment page
            header("Location: $url");
            exit();  // Ensure no further script execution after redirection
        } else {
            echo 'Error in storing transaction details.';
        }

    } catch (Exception $e) {
        // Handle API error
        echo 'Error: ' . $e->getMessage();
    }

} else {
    echo 'Error: Invalid amount or form not submitted correctly.';
}
?>
