<html>
<head>
    <title>Login</title>
</head>
<body class="b">
    <?php include 'db.php'; ?>
   

    <?php
    session_start(); // Start the session

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data and sanitize inputs
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];

        // Check if the user exists
        $query = "SELECT * FROM data WHERE email='$email'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $row['password'])) {
                $_SESSION['data_id'] = $row['id']; // Store user ID in session
                echo "<script>alert('Login successful!'); window.location.href='index.html';</script>"; // Redirect to main page
            } else {
                echo "<script>alert('Incorrect password.');</script>";
            }
        } else {
            echo "<script>alert('No user found with that email.');</script>";
        }
    }
    ?>
<div class="container">
  <img src="logo.png" style="width:150px;margin-left:20%;margin-top:5%">
    <form action="login.php" method="post">
        <div style="padding-top: 100px; margin-left:20px">
            <label for="email"></label>
            <input type="email" id="email" name="email" required placeholder="Email">
        </div>
        <div style="padding-top: 25px; margin-left:20px">
            <label for="password"></label>
            <input type="password" id="password" name="password" required placeholder="password">
        </div>
        <button type="submit" style="margin-top: 25px; margin-left:20px" class="but">Login</button>
    </form>

    <p style="padding-left: 20px;">Don't have an account? <a href="signup.php" class="c">Sign up here!</a></p>
    </div>
</body>
</html>
<style>
.container{
  margin-top: 5%;
   
   background-color:blueviolet;
   background:linear-gradient(to right,#e2e2e2,#c9d6ff);
   height: 450px;
   width: 300px;
   border-radius: 10%;
   margin-left:40%;
}
.but{
  color: white;
  background-color: blue;
  border-radius: 10%;
}
.but:hover{
  color:white;
  background-color: black;
}
.b{
    background-image: url(s8.jpg);
   
}
.c {
  color: black;
   text-decoration: none; 
  }
  .c:hover {
   color: white;
 }
</style>