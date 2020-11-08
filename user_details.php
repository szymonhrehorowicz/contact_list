<?php include './partials/header.php' ?>
      <main class="content">
        <div class="content-nav">
          <img class="icon icon--back" id="backBtn" src="./media/arrow.svg" alt="Wróć" title="Wróć" />
        </div>
        <h1 class="content__header">
          <span class="content__header--main">Szczegóły użytkownika</span>
        </h1>
        <section class="user">
            <?php 
              error_reporting(0);
              $id = $_GET["id"];

              if(!$id) {
                echo "<p class=\"user__details error\">Nie podano żadnego id użytkownika".$id."</p>";
              }else {
                $servername = "localhost";
                $username = "root";
                $password = "";
  
                $conn = new mysqli($servername, $username, $password);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                $conn->query("USE lista_kontaktow");
  
                $sql = "SELECT imie, nazwisko, dzial, adres, tel, email FROM kontakty WHERE id=".$id;
  
                $result = $conn->query($sql);
  
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "
                  <p class=\"user__detail\"><span class=\"user__details--main\">Imię i  nazwisko: </span>"
                  .$row["imie"]." ".$row["nazwisko"].
                  "</p>
                  <p class=\"user__detail\"><span class=\"user__details--main\">Dział: </span>"
                  .$row["dzial"].
                  "</p>
                  <p class=\"user__detail\"><span class=\"user__details--main\">Adres: </span>"
                  .$row["adres"].
                  "</p>
                  <p class=\"user__detail\"><span class=\"user__details--main\">Nr telefonu: </span>"
                  .$row["tel"].
                  "</p>
                  <p class=\"user__detail\"><span class=\"user__details--main\">Adres email: </span>"
                  .$row["email"].
                  "</p>";
                }
                }
                $conn->close();
              }
            ?>
        </section>
      </main>
<?php include './partials/footer.php' ?>