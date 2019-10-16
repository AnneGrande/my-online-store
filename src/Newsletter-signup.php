<?php 
    $username = "s9isan01"; 
    $password = "Grande198210";
    $servername = "localhost"; 
    $dbname = "s9isan01";
    $table = "newsletter";  
     
    $name= $_POST['name']; 
    $country= $_POST['country']; 
    $email= $_POST['email']; 
      
      
    // Connection to DBase  
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
     
     
    $sql= "INSERT INTO $table  ". "VALUES ('$name', '$country', '$email')"; 
     
    if (mysqli_query($conn, $sql)) {
    echo "You have been succesfully added to our mailinglist! 🥰";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

    


