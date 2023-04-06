<?php

$hostname="localhost"; 
$username="vysotskyi"; 
$password="vysotskyi";
/*Ім'я бази даних*/
$dbname="vysotskyi_students";
/*Ім'я таблиці в базі даних*/
/* Створити з'єднання */ 
$usertable = "Students";
$conn= new mysqli($hostname,$username,$password,$dbname);
 if(!$conn){
    die ("Connection failed: "). mysqli_connect_error();
 }
echo "Connected successfully";

$user_name=$_POST["user_name"];
$phone=$_POST["user_name"];
$hobby=$_POST["user_name"];
$university=$_POST["user_name"];
$course=$_POST["user_name"];



$query1 = "INSERT INTO $usertable VALUES
 ('$user_name','$phone','$hobby','$university','$course')";
$result1 = MYSQLI_QUERY($conn,$query1);


$sql="SELECT $user_name,$phone,$hobby,$university, $course FROM $usertable";
$result2 = $conn->query($sql);

// Generate an HTML table using PHP
if ($result2->num_rows > 0) {
  echo "<table>";
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo "<tr><td>".$row["user_name"]."</td><td>".$row["phone"]."</td><td>".$row["hobby"]."</td><td>".$row["university"]."</td><td>".$row["course"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
mysqli_close($conn);
?>

