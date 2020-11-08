<?php include './partials/header.php' ?>
      <main class="content">
        <div class="content-nav">
          <img class="icon icon--back" id="backBtn" src="./media/arrow.svg" alt="Wróć" title="Wróć" />
          <img class="icon icon--add" id="addBtn" src="./media/add.svg" alt="Dodaj użytkownika" title="Dodaj użytkownika" />
        </div>
        <h1 class="content__header">
          <span class="content__header--main">Lista Kontaktowa</span>
        </h1>
        <?php 
          error_reporting(0);
          if($_GET["success"]) {
            echo "<p class=\"success\">Pomyślnie dodano nowego użytkownika</p>";
          }
        ?>
        <table class="table">
            <tr class="table__header">
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Dział</th>
                <th>Sczegóły</th>
            </tr>
            <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";

                $conn = new mysqli($servername, $username, $password);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                $conn->query("USE lista_kontaktow");

                $sql = "SELECT id, imie, nazwisko, dzial FROM kontakty";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr class=\"table__user\">
                        <th>".$row["id"]. "</th>
                        <td>" .$row["imie"]. "</td>
                        <td>" .$row["nazwisko"]. "</td>
                        <td>". $row["dzial"] ."</td>
                        <td>
                          <a href=\"user_details.php?id=". $row["id"] ."\">
                            <img class=\"icon icon--details\" src=\"./media/search.svg\" alt=\"Szczegóły\" />
                          </a>
                        </td>
                        </tr>";
                }
                } else {
                    echo "<tr><th class=\"error\">Brak rezultatów</th></tr>";
                }
                $conn->close();
            ?>
        </table>
      </main>
<?php include './partials/footer.php' ?>