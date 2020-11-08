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
  
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->query("USE lista_kontaktow");
  
    $sql = "INSERT INTO kontakty (imie, nazwisko, dzial, adres, tel, email) VALUES ('$name', '$lastName', '$job', '$address', '$tel', '$email')";
  
    $conn->query($sql);
    $conn->close();

    header('Location: users.php?success=true');
    die();
?>