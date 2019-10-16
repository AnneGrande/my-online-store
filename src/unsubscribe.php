<?php 
 
$username = "s9isan01"; 
    $password = "Grande198210";
    $servername = "localhost"; 
    $dbname = "s9isan01";
    $table = "newsletter";
 
 
$email_entered= $_POST['emailentered']; 

 
$from= 'support@theoldkitecompany.com'; 

 
// Connection to DBase  
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql="DELETE FROM newsletter WHERE email='$email_entered'"; 
$result= mysqli_query($conn, $sql)  
or die ('Error querying database.'); 
 
 
mysqli_close($conn); 
?> 
 
 
<p id="para1">You have successfully unsubscribed from this newsletter. 
 
