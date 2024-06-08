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
$stockid=$_REQUEST["stockid"];
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

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$sql = "update stock set  image='".basename($_FILES["fileToUpload"]["name"])."' where stockid=".$stockid;
$conn->query($sql);
$conn->close();
echo("<script>alert('Stock image updated');</script>");
header("location:managestock.php");

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
    <h2>Update Image</h2>
    <form id="signupForm" method="post" action="updateimage.php" enctype="multipart/form-data">
      <label for="stockid">Stock:</label>
      <input type="text" id="stockid" name="stockid" required>
	
		<br><br><br>
	<label for="image">Image of book:</label>
       <input type="file" name="fileToUpload" id="fileToUpload">

	<br><br><br>
      <button type="submit" name="submit" value="submit">Update image</button>
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