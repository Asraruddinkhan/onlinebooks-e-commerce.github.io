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
$name1=$_REQUEST["bookname"];
$price=$_REQUEST["price"];
$isbn=$_REQUEST["isbn"];
$count=$_REQUEST["count"];
$image=basename($_FILES["fileToUpload"]["name"]);
$publisher=$_REQUEST["publisher"];
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
$sql = "INSERT INTO stock (bookname,price,ISBN, count, image,publisher)VALUES ('".$name1."',".$price.",'".$isbn."',".$count.",'".$image."','".$publisher."')";
$conn->query($sql);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
header("location:adminpanel.php");
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
    <h2>New Stock Entry Form</h2>
    <form id="signupForm" method="post" action="newstock.php" enctype="multipart/form-data">
      <label for="bookname">Book Name:</label>
      <input type="text" id="bookname" name="bookname" required>
	<br><br><br>
      <label for="price">Price:</label>
      <input type="text" id="price" name="price" required>
		<br><br><br>
      <label for="ISBN">ISBN:</label>
      <input type="text" id="isbn" name="isbn" required>
		<br><br><br>
	<label for="count">Books Count:</label>
      <input type="text" id="count" name="count" required>
		<br><br><br>
	<label for="image">Image of book:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
		<br><br><br>
	<label for="publisher">Publisher</label>
      <textarea id="publisher" name="publisher" required></textarea>
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