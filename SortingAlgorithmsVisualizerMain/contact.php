<?php
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO contact(contact_name,contact_email,mess)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $name,
                  $email,
                  $message);
                  
if ($stmt->execute()) {

    header("Location:index.html#algorithms");
    exit;
    
} else {

    die($mysqli->error . " " . $mysqli->errno);
}


echo $name;
echo $email;
echo $message;

?>

