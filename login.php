<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookstore</title>
  <link rel="stylesheet" href="CSS/styles.css">

<style>

.login-container {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 20px; /* Adjust as needed */
}
.login-container h2 {
  color: #007bff;
}

.login-container button {
  background-color: #28a745;
}

.login-container button:hover {
  background-color: #218838;
}
header {
  background-color: #333;
  color: #fff;
  padding: 1rem;
  text-align: center;
}

</style>

<script src="JS/scripts1.js"></script>
</head>
<body>

<?php
session_start();
if(isset($_REQUEST["submit"]))
{
$username1=$_REQUEST["username"];
$password1=$_REQUEST["password"];
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

$sql = "SELECT * FROM users1 WHERE email='".$username1."' and password='".$password1."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
print($_REQUEST['input']);
print($_SESSION['captcha']);
 if ($_REQUEST['input'] == $_SESSION['CAPTCHA_CODE'])
{
header("location:genres.php");
}
else
{
echo("<script>alert('Captcha code is not right');</script>");
}
}
else
{
echo("<script>alert('Not right user');</script>");
}
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
     <div class="login-container">
    <h2>Login</h2>
    <form id="loginForm" method="post" action="login.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
	<br><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
	<br><br><br>
      
<h2>Captcha code</h2>
     
    <div style='margin:15px'>
        <img src="http://localhost/books/captcha.php">
    </div>
     
         <input type="text" name="input"/>
        <input type="hidden" name="flag" value="1"/>
       <button type="submit" name="submit" value="submit">Login</button> 
    <div style='margin-bottom:5px'>
        
    </div>
     
    <div>
        Can't read the image? Click
        <a href='<?php echo $_SERVER['PHP_SELF']; ?>'>
            here
        </a>
        to refresh!
    </div>



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