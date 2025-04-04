<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    // Jeśli użytkownik nie jest zalogowany, przekieruj na stronę logowania
    header("Location: admin-log.php");
    exit;
}
?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Formularz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" media="screen" href="style21.php" />
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>
  <header>
  <?php 
    echo "<h1>Witaj, " . $_SESSION["username"] . "</h1>";
  ?>
  </header>
  <main>
    <section class="container">
      <div class="form">
        <h1><a href="user-form.php">Formularz</a></h1>
        <form id="forms" action="users.php" method="post">
          <div class="details">
            <label for="firstName" class="details"><i class="fa fa-user"></i></label>
            <input type="text" name="txtFirstName" id="firstName" placeholder="Twoje imię" />
          </div>

          <div class="details">
            <label for="lastName" class="details"><i class="fa fa-user"></i></label>
            <input type="text" name="txtLastName" id="lastName" placeholder="Twoje nazwisko" />
          </div>

          <div class="details">
            <label for="pass" class="details"><i class="fa fa-lock"></i></label>
            <input type="password" name="txtPassword" id="pass" placeholder="Hasło" />
          </div>

          <div class="details">
            <label for="cnfmPassword" class="details"><i class="fa fa-lock"></i></label>
            <input type="password" name="txtPassword2" id="cnfmPassword" placeholder="Powtórz hasło" />
          </div>

          <div class="details">
            <label for="email" class="details"><i class="fa fa-envelope"></i></label>
            <input type="email" name="txtEmail" id="email" placeholder="Email" />
          </div>

          <div class="details">
            <label for="phoneNumber" class="details"><i class="fa fa-phone"></i></label>
            <input type="text" name="txtPhone" id="phoneNumber" minlength="9" maxlength="9" placeholder="Numer telefonu" />
          </div>

          <div class="details">
            <label for="birthday" class="details">Data urodzenia : </label>
            <input type="date" name="txtBirthDate" id="birthday" min="1900-12-31" max="2019-12-31" />
          </div>

          <div class="details">
            <label for="birthPlace" class="details">Miejsce urodzenia: </label>
            <input type="text" name="txtBirthPlace" id="birthPlace" />
          </div>

          <div class="details">
            <label for="weight" class="details">Waga (kg): </label>
            <input type="number" name="txtWeight" id="weight" min="1" max="300" />
          </div>

          <div class="details">
            <label for="height" class="details">Wzrost (cm): </label>
            <input type="number" name="txtHeight" id="height" min="30" max="250" />
          </div>

          <div class="details">
            <label for="sex" class="details">K</label>
            <input type="radio" name="txtSex" id="sexK" value="Kobieta" />
            <label for="sex" class="details">M</label>
            <input type="radio" name="txtSex" id="sexM" value="Mężczyzna" />
            <label for="sex" class="details">Inny</label>
            <input type="radio" name="txtSex" id="sexDiff" value="Inny">
          </div>

          <div class="details">
            <label for="myCheck" class="details"><a id="terms" href="regulamin.html" target="_blank"><b>Czy akceptujesz regulamin?</b></a></label>
            <input type="checkbox" name="checkbox" id="myCheck" onclick="init()" onchange="document.getElementById('sbmt').disabled = !this.checked;" !checked />
          </div>

          <span id="result"></span>

          <label for="aboutYourself" class="details">O sobie: </label>

          <textarea name="aboutYourself" id="aboutYourself"></textarea>
          
          <div class="details">
            <input type="submit" class="buttons" name="sbmt" id="sbmt" value="Wyślij" disabled />
            <input type="reset" id="wycz" class="buttons" value="Wyczyść"/>
          </div>
        </form>
      </div>
      <h1 style='color: #fff;'><a style='color: #fff;' href="user-logout.php">Wyloguj</a></h1>
    </main>
    <script src="app.js"></script>
</body>

</html>