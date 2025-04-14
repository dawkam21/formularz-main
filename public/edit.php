<?php

  $HOSTNAME = 'localhost';
  $USERNAME = 'root';
  $PASSWORD = '';
  $DATABASE = 'db_contact';

  $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

  $id = "";
  $name = "";
  $lastName = "";
  $email = "";
  $phone = "";
  $sex = ""; 

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(!isset($_GET["id"])) {
      header("location: index.php");
      exit;
    }

    $id = $_GET["id"];

    $sqlsql = "SELECT * FROM tbl_users WHERE id = $id";
    $rsltrslt = $con->query($sqlsql);
    $row = $rsltrslt->fetch_assoc();

    if (!$row) {
      header("location: index.php");
      exit;
    }

    $name = $row["fldFirstName"];
    $lastName = $row["fldLastName"];
    $email = $row["fldEmail"];
    $phone = $row["fldPhone"];
    $sex = $row["fldSex"];
    
  } else {
    $id = $_POST["id"];
    $name = $_POST["fldFirstName"];
    $lastName = $_POST["fldLastName"];
    $email = $_POST["fldEmail"];
    $phone = $_POST["fldPhone"];
    $sex = $_POST["fldSex"];

    do {
      if (empty($id) || empty($name) || empty($lastName) || empty($email) || empty($phone) || empty($sex)) {
        echo "<script>
        alert('Wszystkie pola muszą zostać wypełnione');
        window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        </script>";
        break;
      }

      if ($sex != "Mężczyzna" && $sex != "Kobieta" && $sex != "Inny") {
        echo "<script>
        alert('Wprowadź poprawną płeć!');
        window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        </script>";
      } else {
      $sql3 = "UPDATE `tbl_users` " . 
      "SET fldFirstName = '$name', fldLastName = '$lastName', fldEmail = '$email', fldPhone = '$phone', fldSex = '$sex' " . 
      "WHERE id = $id";

      $rsltat = $con->query($sql3);

        if (!$rsltat) {
          $errorMessage = "Invalid query: " . $con->error;
          break;
        } else {

          echo "<script>
          alert('Zaktualizowano pomyślnie');
          window.location.href = '" . "history.php" . "';
          </script>";

        exit;
        }
      }

    } while (true);
  }

?>

<!DOCTYPE html>

<html>
  
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Formularz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" media="screen" href="style-hist.php" />
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  
  <body>
  <header>
  </header>
  <main>
    <h2 class="edith2">Edycja</h2>
      <form method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row-3">
          <label class="col-form-label">Imię: </label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="fldFirstName" value="<?php echo $name; ?>">
          </div>
        </div>
        <div class="row-3">
          <label class="col-form-label">Nazwisko: </label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="fldLastName" value="<?php echo $lastName; ?>">
          </div>
        </div>
        <div class="row-3">
          <label class="col-form-label">Email: </label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="fldEmail" value="<?php echo $email; ?>">
          </div>
        </div>
        <div class="row-3">
          <label class="col-form-label">Numer telefonu: </label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="fldPhone" value="<?php echo $phone; ?>">
          </div>
        </div>
        <div class="row-3">
          <label class="col-form-label">Płeć: </label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="fldSex" value="<?php echo $sex; ?>">
          </div>
        </div>
        <div class="row-4">
          <div class="sbmtBttn">
            <a href="history.php"><button type="submit" class="bttnSbmt">Zatwierdź</button></a>
          </div>
          <div class="cancelBttn">
            <a href="history.php" class="bttnCancel" role="button">Anuluj</a>
          </div>
        </div>
      </form>
  </main>
    <script src="app.js"></script>
</body>

</html>