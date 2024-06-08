<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookstore</title>
  <link rel="stylesheet" href="CSS/styles.css">
<script src="JS/scripts1.js"></script>
</head>
<body>
 <?php
if(isset($_REQUEST["submit"]))
{
$name1=$_REQUEST["username"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$mobileno=$_REQUEST["mobile"];
$sex=$_REQUEST["sex"];
$address=$_REQUEST["address"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booksshopping";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users1 (name,email,password, mobileno, sex,address)VALUES ('".$name1."','".$email."','".$password."','".$mobileno."','".$sex."','".$address."')";
$conn->query($sql);
header("location:index.html");
$conn->close();
}

?>


 <header>




    <h1>Asrar Bookstore</h1>
    <nav>
      <ul>
        <li style="acolor:white"><a href="index.html">Home</a></li>
 
      </ul>
    </nav>
  </header>
    <div class="signup-container">
    <h2>New User Entry Form for Admin</h2>
     <form id="signupForm" method="get" action="newuser.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
	<br><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
		<br><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
		<br><br><br>
	<label for="mobileno">Mobile No:</label>
      <input type="text" id="mobile" name="mobile" required>
		<br><br><br>
	<label for="sex">Sex:</label>
      <input type="text" id="sex" name="sex" required>
		<br><br><br>
	<label for="address">Address</label>
      <textarea id="address" name="address" required></textarea>
		<br><br><br>
      <button type="submit" name="submit" value="submit">Sign Up</button>
    </form>
  </div>

<br>
<br>
<br>
  <footer>
    <p>&copy; 2024 Bookstore. All rights reserved.</p>
  </footer>

  <script src="JS/scripts.js"></script>
</body>
</html>