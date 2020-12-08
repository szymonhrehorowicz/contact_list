<?php 
    $id = $_GET["id"];
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $job = $_POST["job"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "lista_kontaktow";
  
    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  
    $sql = "UPDATE kontakty SET imie='$name', nazwisko='$lastName', dzial='$job', adres='$address', tel='$tel', email='$email' WHERE id = '$id'";
  
    $conn->query($sql);
    $conn->close();

    header('Location: users.php?success=true&type=edit');
    die();
?>