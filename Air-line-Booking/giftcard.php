
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Gift Card</title>
</head>
<body>
    

    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 20px;
}

.gift-card-form {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: auto;
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type='text'],
input[type='email'],
input[type='number'],
input[type='date'],
select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

fieldset {
    border: none; /* Remove default fieldset border */
    margin-bottom: 15px; /* Space below fieldset */
}

button {
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    padding: 10px;
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    width: 100%;
}

button:hover {
    background-color: #45a049; /* Darker green on hover */
}  
.nav{
    background-color: rgb(216, 207, 207);
    height: 85px;
    width: auto;   
}
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.container1{
    display: flex;
    justify-content: center;
    align-items: center;
}
.container1 .btn{
    list-style-type: none;
    padding: 0;
    margin: 0 15px;
    text-align: center;
}
.container1 .btn .li{
    margin-bottom: 20px;
}
.container1 .btn{
    background-color: #ffffff;
    border: none;
    color: rgb(0, 0, 0);
    padding: 15px 50px;
    text-align: center;
    text-decoration: none;
    display: block;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.container1 .btn img{
    width: 45px;
    height: 55px;
    display: block;
    margin: 0 auto;
}
.container1 .btn span{
    display: block;
    margin-top: 10px;
}

.container1 .btn:hover{
    background-color:rgb(123, 102, 102);
} 
.a{
    float: right;
}
.naup{
    float: right;
}
.naup ul{
    display: flex;
}
.naup li{
    list-style: none;
    margin-right: 30px;
    margin-top: 20px;
}
.naup li a{
    color: black;
    text-decoration: none;
}
.nadn{ 
    float: right;
}
.nadn ul{
    display: flex;   
}
.nadn li{
    list-style: none;
    margin-right: 20px;
}
.nadn li a{
    color: black;
    text-decoration: none;   
    position: relative;
}
.nadn li a:after {
    content: "";
    position: absolute;
    background-color: red;
    height: 3px;
    width: 0;
    left: 0px;
    bottom: -5px;
    transition: 0.3s;
}
.nadn li a:hover:after{
   width: 100%;
}
.show{
    width: 100%;
    height:300px;
    background-color:aliceblue;
    display: flex; 
    margin-top: 6px;
    position: fixed;  
}
.show li{
    text-decoration: none;
    font-family: sans-serif;
    list-style-type: none; 
}
.mega{
    display: flex;.show {
    width: 100%;
    height: 300px;
    background-color: aliceblue;
    display: flex;
}
#nave {
    position: absolute;   
}
    margin-left: 100px;
}
.mega ul li a{
    text-decoration: none;
    color: black;    
}
.m li{
padding-top: 10%;
white-space: nowrap; 
}
.m2{
    margin-top: 25%;
}
.m2 li{
    padding-top: 10%;
    white-space: nowrap;    
}
.mega2{
    display: flex;  
    margin-left: 10%; 
}
.mega2 ul li a{
    text-decoration: none;
    color: black;  
}

.m3 li{
    padding-top: 5% ;
    padding-left: 20%;
    white-space: nowrap;   
}
.m4{
    margin-top: 22%;
    white-space: nowrap; 
    margin-left: 30px;
}
.m4 li{
    padding:5%;
}
.show1{
    background-color: aliceblue;
    width: 100%;
    height:300px;
    margin-top: 6px;
}
.show1 li{
    text-decoration: none;
    font-family: sans-serif;
    list-style-type: none;   
}
.mega1{
    display: flex;.show {
    display: flex;
}
.show1{
    height: 300px;
    width:100%;
    left:0;
    position: fixed;
}
#nave1 {
    position: absolute; 
    top: 50px;
    left: 0; 
    width: 100%;
}
    margin-left: 200px;
}
.show1{
    display: flex;
}
.m1 li{
    list-style: none;
    margin-top:5%;    
}
.m1 li a{
    text-decoration: none;
    color: black;   
}
.show2{
    background-color: aliceblue;
    margin-top: 6px;
}
.show2 li{
    text-decoration: none;
    font-family: sans-serif;
    list-style-type: none;   
}
.show2{
    height: 300px;
    width:100%;
    left:0;
    position: fixed;
}
#nave2 {
    position: absolute; 
    top: 50px;
    left: 0; 
    width: 100%;
}
.show2{
    display: flex;
}

.m5 h2 {
    margin-left: 2%;
    white-space: nowrap;  
}
.m5 li{
    list-style: none;
    margin-top:5%;  
    margin-left: 20%;  
}
.m5 li a{
    text-decoration: none;
    color: black;   
}
.exp{
    background-color: aliceblue;
    display: flex;
    width: 100%;
    height: 300px;
    position: fixed;
    margin-top: 6px;
}
.sh3{
    width: 100%;
    display: flex;
    position: fixed;
    
}
#nave3 {
    position: relative; 
    top: 50px;
    left: 0; 
    width: 100%;
}
.m6 li{
    list-style: none;
    margin-top: 15px;
    font-family: sans-serif;
}
.m6 li a {
    text-decoration: none;
    color: black;
}
.im2{
    margin-left: 12%;
    display: flex;
    margin-top: 10px;
}
.im2 img{
    padding-left: 40px;
}
.loyal{
        background-color: aliceblue;
        display: flex;
        width: 100%;
        height: 300px;
        position: fixed;
        margin-top: 6px;
}
.m7 li{
    list-style: none;
    font-family: sans-serif;margin-top: 5%;
}
.m7 li a{ 
    color: black;
    text-decoration: none;
}
.im3{
    margin-left: 15%;
    display: flex;
    margin-top: 10px;
    position: relative;
}
.im3 img{
    padding-left: 40px;
}
.imgtext{
     background: linear-gradient(to bottom, rgba(255, 255, 255, 255) 0%, rgba(0.1, 0.2, 0.3, 0.5) 100%);
     position: absolute;
     top: 5px;
     left: 40px;
     width: 250px;
    height: 250px;
}
.imgtext p{
    position: absolute;
    color: white;
    top: 140px;
    left: 70px;
    font-size: 12px;
    font-weight: bold;
}
.imgtext h3 {
    position: absolute;
    color: aliceblue;
    top: 150px;
    left: 70px;
    font-size: 24px;
    font-weight: bold;    
}
.imgtext h4{
    position: absolute;
    color: white;
    top:170px;
    left: 70px;
    font-size:24px ;
    font-weight: bold;
}
.imgtext1{
     background: linear-gradient(to bottom, rgba(255, 255, 255, 255) 0%, rgba(0.1, 0.2, 0.3, 0.5) 100%);
     position: absolute;
     top: 5px;
     left: 40px;
     width: 250px;
    height: 250px;
}
.imgtext1 p{
    position: absolute;
    color: white;
    top: 140px;
    left: 60px;
    font-size: 12px;
    font-weight: bold;
}
.imgtext1 h3, .imgtext3 h3 {
    position: absolute;
    color: aliceblue;
    top: 150px;
    left: 60px;
    font-size: 24px;
    font-weight: bold;    
}
.imgtext1 h6{
    position: absolute;
    color: white;
    top:210px;
    left: 60px;
    font-size:24px ;
    font-weight: bold;
}
.row2 {
    position: relative;
}
.imgtext2,.imgtext3{
     background: linear-gradient(to bottom, rgba(255, 255, 255, 255) 0%, rgba(0.1, 0.2, 0.3, 0.5) 100%);
     position: absolute;
     top: 5px;
     left: 40px;
     width: 250px;
    height: 250px;
}
.imgtext2 p, .imgtext3 p{
    position: absolute;
    color: white;
    top: 140px;
    left: 60px;
    font-size: 12px;
    font-weight: bold;
}
.imgtext2 h3,.imgtext3 h3 {
    position: absolute;
    color: aliceblue;
    top: 150px;
    left: 20px;
    font-size: 24px;
    font-weight: bold;    
}
.imgtext2 h6{
    position: absolute;
    color: aliceblue;
    top: 210px;
    left: 20px;  
}
.imgtext4,.imgtext5{
    background: linear-gradient(to bottom, rgba(255, 255, 255, 255) 0%, rgba(0.1, 0.2, 0.3, 0.5) 100%);
    position: absolute;
    top: 13px;
    left: 40px;
    width: 250px;
   height: 250px;  
}
.imgtext4 a,.imgtext5 a {
    position: absolute;
    color: aliceblue;
    top: 150px;
    left: 20px;
    text-decoration: none;
}
.imgtext5 h6{
    position: absolute;
    color: aliceblue;
    top: 50px;
    left: 0px;
}
.container{
    margin-top: 10px;
    background-color: rgb(248, 239, 228);
    height: 220px;
    width: 100%;
}
.container button{
    display: inline;
    padding-right: 2%;
    padding-left: 2%;
    background-color:white;
    border: 0px;
    margin-top: 5px;
    margin-left: 5%;
}
 .form-section {
    display: none;
}
#search {
    display: block;
}
        </style>


<nav>
    <div class="nav">
    <img src="logo.png" style="height:40px; width:180px; padding-top:20px; padding-left:10px">
        <div class="a">
        <div class="naup">
        <ul>
            <li>GIFT CARD</li>
            <li>AIRINDIA.COM</li>
            <li>ORDER STATUS</li>
            <li>CHECK BALANCE</li>
        </ul>
        </div>
        <br>
        
      </div>
      </div>
      <div id="nave" onmouseleave="closenav()"></div> 
      <div id="nave1" onmouseleave="closenav1()" ></div>
      <div id="nave2" onmouseleave="closenav2()" ></div>
      <div id="nave3" onmouseleave="closenav3()" ></div>  
    </nav>
<br>
<br>
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="1.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="3.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
    
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="4.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="5.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      
      setTimeout(showSlides, 3000); 
    }
    </script>
<div class="container1">
    <li>
        <button class="btn">
            <img src="14.jpg" alt="Anniversary Logo">
            <span>Anniversary</span>
        </button>
    </li>
    <li>
        <button class="btn">
            <img src="13.jpg" alt="Birthday Logo">
            <span>Birthday</span>
        </button>
    </li>
    <li>
        <button class="btn">
            <img src="15.jpg" alt="Special Momments logo">
            <span>Special Momments</span>
        </button>
    </li>
    <li>
        <button class="btn">
            <img src="11.jpg" alt="Travels logo">
            <span>Travel</span>
        </button>
    </li>
</div>
<br>
<br>
<div class="gift-card-form">
    <h2>Airline Gift Card</h2>
    <form>
        <label for="amount">Enter Amount ($):</label>
        <input type="number" id="amount" name="amount" required>

        <label for="quantity">Enter Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <fieldset>
            <legend>Delivery Option:</legend>
            <label>
                <input type="radio" name="delivery-option" value="online" checked> Send as Online
            </label>
            <label>
                <input type="radio" name="delivery-option" value="self"> Buy for Self
            </label>
        </fieldset>

        <label for="delivery-date">Pick a Delivery Date:</label>
        <input type="date" id="delivery-date" name="delivery-date" required>

        <h3>Sender Details</h3>
        <label for="sender-name">Name:</label>
        <input type="text" id="sender-name" name="sender-name" required>

        <label for="sender-email">Email:</label>
        <input type="email" id="sender-email" name="sender-email" required>

        <h3>Receiver Details</h3>
        <label for="receiver-name">Name:</label>
        <input type="text" id="receiver-name" name="receiver-name" required>

        <label for="receiver-email">Email:</label>
        <input type="email" id="receiver-email" name="receiver-email">

        <label>
            <input type="checkbox" id="same-as-sender" onclick="copySenderDetails()">
            Same as Sender Details
        </label>

        <h3>Payment Method</h3>
        <select id="payment-method" name="payment-method">
            <option value="" disabled selected>Select Payment Method</option>
            <option value="credit-card">Credit Card</option>

            <option value="bank-transfer">Bank Transfer</option>
        </select>

        <button type="submit">Purchase Gift Card</button>
        <br>
        <br>
        <button type="submit">generateButton Gift Card</button>
    </form>
</div>

<script>
    document.getElementById('giftCardForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        alert('Gift card purchased successfully!');
        this.reset();
    });

    document.getElementById('generateButton').addEventListener('submit',function(event){
        alert('Gift card number generated successfully!');
        this.rest();
    });
        
        function copySenderDetails() {
            const checkbox = document.getElementById("same-as-sender");

            const senderName = document.getElementById("sender-name");
            const senderEmail = document.getElementById("sender-email");
            const receiverName = document.getElementById("receiver-name");
            const receiverEmail = document.getElementById("receiver-email");

            if (checkbox.checked) {
                receiverName.value = senderName.value;
                receiverEmail.value = senderEmail.value;

                receiverName.readOnly = true;
                receiverEmail.readOnly = true;
            } else {
                receiverName.value = "";
                receiverEmail.value = "";
                receiverName.readOnly = false;
                receiverEmail.readOnly = false;
            }
        }
    
</script>

</body>

</html>
<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $amount = $_POST['amount'];
    $quantity = $_POST['quantity'];
    $deliveryOption = $_POST['delivery-option'];
    $deliveryDate = $_POST['delivery-date'];
    $senderName = $_POST['sender-name'];
    $senderEmail = $_POST['sender-email'];
    $receiverName = $_POST['receiver-name'];
    $receiverEmail = $_POST['receiver-email'];
    $paymentMethod = $_POST['payment-method'];

    // Prepare and bind an SQL statement
    $stmt = $conn->prepare("INSERT INTO giftcards (amount, quantity, delivery_option, delivery_date, sender_name, sender_email, receiver_name, receiver_email, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("disssssss", $amount, $quantity, $deliveryOption, $deliveryDate, $senderName, $senderEmail, $receiverName, $receiverEmail, $paymentMethod);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Gift card purchased successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

?>