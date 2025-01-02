<html>
<head>
    <title>Sign Up</title>
    <script>
        function login() {
            window.location.href = 'login.php';
        }
    </script>
</head>
<body class="b">
    <?php include 'db.php'; ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Check if the username or email already exists
        $checkQuery = "SELECT * FROM data WHERE username='$username' OR email='$email'";
        $checkResult = $conn->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            echo "<script>alert('Username or email already exists.'); login();</script>";
        } else {
            $insertQuery = "INSERT INTO data (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($insertQuery) === TRUE) {
                echo "<script>alert('Sign up successful! You can now log in.'); login();</script>";
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }
    }
    $conn->close();
    ?>
    <div class="container">
    <img src="logo.png" style="width:150px;margin-left:20%;margin-top:5%">

    <form action="signup.php" method="post">
            <div class="a" style="padding-left: 50px;">            <div class="form-group" style="padding-top:20%">
                <label for="username"></label>
                <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
            </div>
            <div class="form-group" style="padding-top:5%">
                <label for="email"></label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
            </div>
            <div class="form-group" style="padding-top:5%">
                <label for="password"></label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
            </div><br>
            <button type="submit" class="btnbtn-primary" style="margin-top:5%">Sign up</button>
        </div>

        <p style="padding-left: 20px;">Already you have account  <a href="login.php" class="c">Log in here!</a></p>
        </div>

    </form>
    </div>
  
</body>
</html>
<style>
.container{
  margin-top: 5%;
   margin-left: 40%;
   background-color:blueviolet;
   background:linear-gradient(to right,#e2e2e2,#c9d6ff);
   height: 450px;
   width: 300px;
   border-radius: 10%;
}
.btnbtn-primary{
  color: white;
  background-color: blue;
  border-radius: 10%;
}
.btnbtn-primary:hover{
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
