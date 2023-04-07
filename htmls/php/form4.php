<?php
$hostname="localhost"; 
$username="vysotskyi"; 
$password="vysotskyi";
/*Ім'я бази даних*/
$dbname="vysotskyi_students";
/*Ім'я таблиці в базі даних*/
/* Створити з'єднання */ 
$usertable = "students";
$conn= new mysqli($hostname,$username,$password,$dbname);
 if(!$conn){
    die ("Connection failed: "). mysqli_connect_error();
 }
echo "Connected successfully";

print '<form method=post action="form5.php">'; 
print'<br><b>Enter student name:</b>'; 
print'<br><input id ="user_name" name="user_name" value="" size=30>';
print'<br><b>Enter student phone number:</b>'; 
print'<br><input id ="phone" name="phone" value="" size=30>';
print'<br><br><b>Enter student institute</b>';
print'<br><input id ="institute" name="institute" value="" size=50>'; 
print'<br><br><b>Enter student course</b> ';
print'<br><input id ="course" name="course" value="" size=50>' ;
print'<br><br><b>Enter student current gender</b> ';
print'<br><input id ="gender" name="gender" value="" size=20>' ;
print'<br><br><input type="submit" value="Register">' ;
print'</form>'
?>