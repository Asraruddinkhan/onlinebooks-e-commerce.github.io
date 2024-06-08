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
$stockid="";
$bookname="";
$price="";
$isbn="";
$count="";
$publisher="";
if(isset($_REQUEST["show"]))
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
$sql = "select * from stock where stockid=".$stockid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$bookname=$row["bookname"];	
$price=$row["price"];
$isbn=$row["ISBN"];
$count=$row["count"];
$publisher=$row["publisher"];
$stockid=$row["stockid"];
$conn->close();
}
else if(isset($_REQUEST["update"]))
{
$stockid=$_REQUEST["stockid"];
$bookname=$_REQUEST["bookname"];	
$price=$_REQUEST["price"];
$isbn=$_REQUEST["isbn"];
$count=$_REQUEST["count"];
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
$sql = "update stock set bookname='".$bookname."', price=".$price.", ISBN='".$isbn."',count=".$count.",publisher='".$publisher."' where stockid=".$stockid;
$conn->query($sql);
//header("location:managestock.php");
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
    <h2>Update Stock</h2>
    <form id="signupForm" method="post" action="updatestock.php" enctype="multipart/form-data">
 <label for="stockid">Stock ID:</label>
      <input type="text" id="stockid" name="stockid"  value="<?php echo($stockid);?>">
	<br><br><br>
 <label for="bookname">Book Name:</label>
      <input type="text" id="bookname" name="bookname"  value="<?php echo($bookname);?>">
	<br><br><br>
      <label for="price">Price:</label>
      <input type="text" id="price" name="price" value="<?php echo($price);?>">
		<br><br><br>
      <label for="ISBN">ISBN:</label>
      <input type="text" id="isbn" name="isbn"  value="<?php echo($isbn);?>"> 
		<br><br><br>
	<label for="count">Books Count:</label>
      <input type="text" id="count" name="count"  value="<?php echo($count);?>">
		<br><br><br>
	 
	<label for="publisher">Publisher</label>
      <textarea id="publisher" name="publisher" ><?php echo($publisher);?></textarea>
		<br><br><br>
      <button type="submit" name="update" value="submit">Update</button>
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