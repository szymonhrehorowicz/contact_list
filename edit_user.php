<?php include './partials/header.php' ?>
      <main class="content">
        <div class="content-nav">
            <?php 
                error_reporting(0);
                $id = $_GET["id"];
                echo "<a href=\"/user_details.php?id=". $id ."\">
                        <img class=\"icon icon--back\" id=\"backBtn\" src=\"./media/arrow.svg\" alt=\"Wróć\" title=\"Wróć\" />
                      </a>";
            ?>
        </div>
        <h1 class="content__header">
          <span class="content__header--main">Edytuj użytkownika</span>
        </h1>
        <section class="form">
            <?php 
              if(!$id) {
                echo "<p class=\"user__details error\">Nie podano żadnego id użytkownika".$id."</p>";
              }else {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $db = "lista_kontaktow";
  
                $conn = new mysqli($servername, $username, $password, $db);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
  
                $sql = "SELECT imie, nazwisko, dzial, adres, tel, email FROM kontakty WHERE id=".$id;
  
                $result = $conn->query($sql);
  
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<form class=\"add\" action=\"edit_handler.php?id=". $id ."\" method=\"POST\">
                            <div class=\"add__wrapper\">
                                <label for=\"name\" class=\"add__label\">Imię: </label>
                                <input type=\"text\" class=\"add__input\" id=\"name\" name=\"name\" value=\"". $row["imie"]."\" required>
                            </div>
                            <div class=\"add__wrapper\">
                                <label for=\"lastName\" class=\"add__label\">Nazwisko: </label>
                                <input type=\"text\" class=\"add__input\" id=\"lastName\" name=\"lastName\" value=\"". $row["nazwisko"]."\" required> 
                            </div>
                            <div class=\"add__wrapper\">
                                <label for=\"job\" class=\"add__label\">Dział: </label>
                                <input type=\"text\" class=\"add__input\" id=\"job\" name=\"job\" value=\"". $row["dzial"]."\" required>
                            </div>
                            <div class=\"add__wrapper\">
                                <label for=\"address\" class=\"add__label\">Adres: </label>
                                <input type=\"text\" class=\"add__input\" id=\"address\" name=\"address\" value=\"". $row["adres"]."\" required>
                            </div>
                            <div class=\"add__wrapper\">
                                <label for=\"tel\" class=\"add__label\">Nr telefonu: </label>
                                <input type=\"tel\" class=\"add__input\" id=\"tel\" name=\"tel\" value=\"". $row["tel"]."\" required>
                            </div>
                            <div class=\"add__wrapper\">
                                <label for=\"email\" class=\"add__label\">Adres email: </label>
                                <input type=\"email\" class=\"add__input\" id=\"email\" name=\"email\" value=\"". $row["email"]."\" required>
                            </div>
                            <input class=\"btn btn--submit\" type=\"submit\" value=\"Zapisz zmiany\">
                        </form>";
                }
                }
                $conn->close();
              }
            ?>
        </section>
      </main>
<?php include './partials/footer.php' ?>