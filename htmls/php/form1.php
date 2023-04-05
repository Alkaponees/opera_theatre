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
/* Вибір БД */ 
$sql="SELECT * FROM $usertable";
if($conn->query($sql)===TRUE){
    echo "Table $usertable is used already";
}
else{
    echo "Error using table :". $conn->error;
}
mysqli_close($conn)
?>

