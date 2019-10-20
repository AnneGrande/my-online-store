<?php 

$username = "s9isan01"; 
$password = "Grande198210";
$server = "localhost"; 
$dbname = "s9isan01";
$table = "newsletter"; 
 
$from= 'anne.isola@hotmail.com';
 
$subject= $_POST['subject']; 
$body= $_POST['body']; 
 
$conn= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
$query= "SELECT * FROM $table"; 
$result= mysqli_query ($conn, $query)  
or die ('Error querying database.'); 
 
while ($row = mysqli_fetch_array($result)) { 
$name= $row['name']; 
$country= $row['country']; 
$email= $row['email']; 
 
$msg= "Dear $name,\n$body"; 
mail($email, $subject, $msg, 'From:' . $from); 
echo 'Email sent to: ' . $email. '<br>'; 
} 
 
mysqli_close($conn); 
?> 
