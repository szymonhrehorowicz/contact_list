<?php 
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
  
    $sql = "INSERT INTO kontakty (imie, nazwisko, dzial, adres, tel, email) VALUES ('$name', '$lastName', '$job', '$address', '$tel', '$email')";
  
    $conn->query($sql);
    $conn->close();

    header('Location: users.php?success=true&type=add');
    die();
?>