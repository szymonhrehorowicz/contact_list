<?php 
error_reporting(0);
$id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "lista_kontaktow";
  
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM kontakty WHERE id=".$id;
$conn->query($sql);
$conn->close();

header('Location: users.php?success=true&type=del');
die();
?>