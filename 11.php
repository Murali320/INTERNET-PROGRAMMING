home page:
<html> 
<head> 
<title>Factorial Program using loop in PHP</title> 
</head> 
<body> 
<form method="post"> 
 Enter the Number:<br> 
 <input type="number" name="number" id="number"> 
 <input type="submit" name="submit" value="Submit" /> 
</form> 
<?php 
 if($_POST){ 
 $fact = 1; 
 //getting value from input text box 'number' 
 $number = $_POST['number']; 
 echo "Factorial of $number:<br><br>"; 
 //start loop 
 for ($i = 1; $i <= $number; $i++){ 
 $fact = $fact * $i; 
 } 
 echo $fact . "<br>"; 
 } 
?> 
</body> 
</html> 
PHP PROGRAM TO CALCULATE FACTORIAL OF A NUMBER USING 
CLIENT SERVER SEPARATE FILE
Client File : inputfact.html
<html> 
<head> 
<title>Factorial Program using loop in PHP</title> 
</head> 
<body> 
<form action="factresponse.php" method="post"> 
 Enter the Number:<br> 
 <input type="number" name="number" id="number"> 
 <input type="submit" name="submit" value="Submit" /> 
</form> 
</body>
</html>
Server File: factresponse.php 
<?php 
 if($_POST){ 
 $fact = 1; 
 //getting value from input text box 'number' 
 $number = $_POST['number']; 
 echo "Factorial of $number:<br><br>"; 
 //start loop 
 for ($i = 1; $i <= $number; $i++){ 
 $fact = $fact * $i; 
 } 
 echo $fact . "<br>"; 
 } 
?> 
32
PHP PROGRAM TO RETRIEVE STUDENT DETAILS FROM MYSQL 
DTABASE
Client Code: inputdb.html
<html> 
<head> 
<title>Database connection in PHP</title> 
</head> 
<body> 
<form action="dbserver.php" method="post"> 
 Enter the Reg Number:<br> 
 <input type="number" name="reg" id="number"> 
 <input type="submit" name="submit" value="Submit"> 
</form> 
</body>
</html>
SERVER CODE: dbserver.php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="jai";
if ($_POST)
{
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM student WHERE regno =".$_POST["reg"];
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
 echo "Reg Number: " . $row["regno"]. " - Name: " . $row["name"]. " -Gender: " . 
$row["gender"]."- Age: " .$row["age"]. "<br>";
33
}
}
?>
Table Structure:
name Varchar(20)
rollno int
gender varchar(1)
age in
