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
$userid="";
$name="";
$email="";
$password="";
$mobileno="";
$sex="";
$address="";
if(isset($_REQUEST["show"]))
{
$userid=$_REQUEST["userid"];
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
$sql = "select * from users1 where userid=".$userid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name=$row["name"];	
$email=$row["email"];
$password=$row["password"];
$mobileno=$row["mobileno"];
$sex=$row["sex"];
$address=$row["address"];
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
    <h2>Show User</h2>
	<form id="signupForm" method="get" action="updateuser.php">
<label for="userid">UserID</label>
      <input type="text" id="userid" name="userid"  value="<?php echo($userid);?>">
	<br><br><br>
      	
<label for="username">Username:</label>
      <input type="text" id="username" name="username" value="<?php echo($name);?>">
	<br><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  value="<?php echo($email);?>">
		<br><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"  value="<?php echo($password);?>">
		<br><br><br>
	<label for="mobileno">Mobile No:</label>
      <input type="text" id="mobile" name="mobile" value="<?php echo($mobileno);?>">
		<br><br><br>
	<label for="sex">Sex:</label>
      <input type="text" id="sex" name="sex"  value="<?php echo($sex);?>">
		<br><br><br>
	<label for="address">Address</label>
      <textarea id="address" name="address" ><?php echo($address);?></textarea>
		<br><br><br>
		<br><br><br>
	<button type="submit" name="show" value="submit">Show</button>
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