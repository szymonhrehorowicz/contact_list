<?php include './partials/header.php' ?>
      <main class="content">
        <div class="content-nav">
          <a href="/users.php">
            <img class="icon icon--back" id="backBtn" src="./media/arrow.svg" alt="Wróć" title="Wróć" />
          </a>
        </div>
        <h1 class="content__header">
          <span class="content__header--main">Dodaj użytkownika</span>
        </h1>
        <section class="form">
            <form class="add" action="form_handler.php" method="POST">
              <div class="add__wrapper">
                <label for="name" class="add__label">Imię: </label>
                <input type="text" class="add__input" id="name" name="name" required>
              </div>
              <div class="add__wrapper">
                <label for="lastName" class="add__label">Nazwisko: </label>
                <input type="text" class="add__input" id="lastName" name="lastName" required> 
              </div>
              <div class="add__wrapper">
                <label for="job" class="add__label">Dział: </label>
                <input type="text" class="add__input" id="job" name="job" required>
              </div>
              <div class="add__wrapper">
                <label for="address" class="add__label">Adres: </label>
                <input type="text" class="add__input" id="address" name="address" required>
              </div>
              <div class="add__wrapper">
                <label for="tel" class="add__label">Nr telefonu: </label>
                <input type="tel" class="add__input" id="tel" name="tel" required>
              </div>
              <div class="add__wrapper">
                <label for="email" class="add__label">Adres email: </label>
                <input type="email" class="add__input" id="email" name="email" required>
              </div>
              <input class="btn btn--submit" type="submit" value="Dodaj użytkownika">
            </form>
        </section>
      </main>
<?php include './partials/footer.php' ?>