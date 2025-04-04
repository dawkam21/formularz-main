<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    // Jeśli użytkownik nie jest zalogowany, przekieruj na stronę logowania
    header("Location: admin-log.php");
    exit;
}

if (!isset($_SESSION["user_id"]) || $_SESSION["role"] !== "admin") {
  header("Location: user-log.php");
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
  <?php 
    echo "<h1>" . ucfirst($_SESSION["username"]) . "</h1>";
    echo "<p>To jest Twój panel zarządzania użytkownikami.</p>"
  ?>
  <header>
    <section class="header">
      <a href="history.php"><h1>Lista użytkowników</h1></a>
    </section>
  </header>
  <main>
    <section class="container">
      <div class="history">
        <?php
        require_once "connect.php";
        try {
          $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
          if ($con->connect_errno != 0) {
            throw new Exception(mysqli_connect_errno());
            } else {

              $sql1 = "SELECT id, fldFirstName, fldLastName, fldEmail, fldBirthDate, fldSex FROM tbl_users ORDER BY fldBirthDate ASC LIMIT 15";
              
              $result = $con->query($sql1);

              if ($result->num_rows > 0) {
                
                echo "<table class='mainTable'>";
                echo "<tbody>
                <tr>
                <th style='padding: 2px; width: 8%;'><a href='sortByIdAsc.php'>id <i class='fa fa-sort-down'></i></th>
                <th style='width: 16%;'><a href='sortByFirstNameAsc.php'>Imię <i class='fa fa-sort-down'></i></a></th>
                <th style='width: 25%;'><a href='sortbyLastNameAsc.php'>Nazwisko <i class='fa fa-sort-down'></i></a></th>
                <th><a href='sortByEmailAsc.php'>Email <i class='fa fa-sort-down'></i></a></th>
                <th style='width: 13%;'><a href='sortByBirthDate.php'>Data urodzenia <i class='fa fa-sort-down'></i></a></th>
                <th><a href='sortBySexAsc.php'>Płeć <i class='fa fa-sort-down'></i></a></th>
                <th>Edytuj</th>
                <th>Usuń</th>
                </tr>";
                
                while ($row = $result->fetch_assoc()) {
                  echo "<tr class='active-row'>";
                  echo "<td id='ids'>" . $row["id"] . "</td>";
                  echo "<td id='firstFldName'>" . $row["fldFirstName"] . "</td>";
                  echo "<td>" . $row["fldLastName"] . "</td>";
                  echo "<td>" . $row["fldEmail"] . "</td>";
                  echo "<td>" . $row["fldBirthDate"] . "</td>";
                  echo "<td>" . $row["fldSex"] . "</td>";
                  echo "<td class='blue'>" . "<a class='btnEdit' href='edit.php?id=$row[id]'>Edytuj" ."</td>";
                  echo "<td class='red'>
                          <a class='btnDelete' href='delete.php?id=" . $row["id"] . "' 
                          onclick='return confirm(\"Czy na pewno chcesz usunąć tego użytkownika?\");'>
                            Usuń
                          </a>
                        </td>";
                  echo "</tr>";
                  }
                  
                  echo "</tbody></table>";
                  } else {
                    echo "Brak wyników";
                    }
                    }
        } catch (Exception $e) {
          echo 'Error occured!';
          }
        ?>
      </div>

    </section>
                <section id="button">
                  <?php
      
      $con2 = new mysqli('localhost', 'root', '', 'db_contact');
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if(isset($_POST['csvAll'])) {
        echo "<script>
        alert('Skonwertowano do pliku humans.csv');
        window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        </script>";
        }
        $queryAll = "SELECT * FROM tbl_users ORDER BY id DESC";
        $separator = ",";
        $resultAll = mysqli_query($con2, $queryAll);
        
        $fp = fopen('humans.csv', 'w');
        while($rowAll = mysqli_fetch_assoc($resultAll)){
          fputcsv($fp, $rowAll, $separator);
          }
          fclose($fp);
        }
      
      if(isset($_POST['csvX']) && isset($_POST['chooseX'])) {
        $csvLimit = (int)$_POST['chooseX'];
        $queryX = "SELECT * FROM tbl_users ORDER BY id DESC LIMIT $csvLimit";
        $separator = ",";
        $resultX = mysqli_query($con2, $queryX);
        if (preg_match('/^\d+$/', $csvLimit)) {
          if ($csvLimit != 0 && $csvLimit) {
          if ($csvLimit == 1) {
            echo "<h1>Skonwertowano $csvLimit rekord</h1>";
          } else if (($csvLimit > 1 && $csvLimit < 5) || ($csvLimit > 21 && $csvLimit < 25) || ($csvLimit > 31 && $csvLimit < 35) || ($csvLimit > 41 && $csvLimit < 45) || ($csvLimit > 51 && $csvLimit < 55) || ($csvLimit > 61 && $csvLimit < 65) || ($csvLimit > 71 && $csvLimit < 75) || ($csvLimit > 81 && $csvLimit < 85) || ($csvLimit > 91 && $csvLimit < 95)) {
            echo "<h1>Skonwertowano $csvLimit rekordy</h1>";
          } else if (($csvLimit > 4 && $csvLimit < 22) || ($csvLimit > 24 && $csvLimit < 42) || ($csvLimit > 44 && $csvLimit < 62) || ($csvLimit > 64 && $csvLimit < 82) || ($csvLimit > 84 && $csvLimit < 102)) {
            echo "<h1>Skonwertowano $csvLimit rekordów</h1>";
          } else {
            echo "<h1>Nie udało się skonwertować pliku, proszę spróbować ponownie.</h1>";
          }}
          $fp = fopen('humans.csv', 'w');
          while($rowX = mysqli_fetch_assoc($resultX)){
            
            fputcsv($fp, $rowX, $separator);
            }
      } else {
          echo "Błąd: Wpisz tylko cyfry!";
        }
        fclose($fp);
          }
          
        ?>
    </section>
  <form method="post">
    <fieldset>
      <label for="csvAll">Konwertuj wszystkie</label>
        <input type="submit" id="csvAll" name="csvAll" value="Konwertuj do pliku CSV"><br>
      <label>Wybierz i konwertuj X</label>
        <input type="text" name="chooseX" id="chooseX" placeholder="X">
        <input type="submit" id="csvX" name="csvX" value="Konwertuj X">
    </fieldset>
  </form>
  <h1 style='color: #fff;'><a style='color: #fff;' href="admin-logout.php">Wyloguj</a></h1>
    </main>
    <script src="app.js"></script>
</body>

</html>