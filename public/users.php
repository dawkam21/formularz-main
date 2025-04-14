<?php
  require_once "connect.php";

  $txtFirstName = $_POST['txtFirstName'];
  $txtLastName = $_POST['txtLastName'];
  $txtPassword = $_POST['txtPassword'];
  $hashedPassword = password_hash($txtPassword, PASSWORD_DEFAULT);
  $cnfmPassword = $_POST['txtPassword2'];
  $txtBirthDate = $_POST['txtBirthDate'];
  $txtBirthPlace = $_POST['txtBirthPlace'];
  $txtWeight = $_POST['txtWeight'];
  $txtHeight = $_POST['txtHeight'];
  $txtEmail = $_POST['txtEmail'];
  $txtSex = $_POST['txtSex'];
  $txtPhone = $_POST['txtPhone'];

  try {
    $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

    if ($con->connect_errno != 0) {
      throw new Exception(mysqli_connect_errno());
    } else {
      if ($txtPassword == $cnfmPassword) {

        if (
          empty($txtEmail) || empty($txtPhone) || empty($txtFirstName) || empty($txtLastName) || empty($txtPassword) || empty($txtBirthDate)
          || empty($txtBirthPlace) || empty($txtWeight) || empty($txtHeight) || empty($txtSex)
        ) {
          echo "<script>
                        alert('Pole nie może być puste');
                        window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
                      </script>";
        } else {

          $sql = "INSERT INTO `tbl_users` (`fldEmail`, `fldPhone`, `fldFirstName`, `fldLastName`, `fldPassword`, `fldBirthDate`, `fldBirthPlace`, `fldWeight`, `fldHeight`, `fldSex`) 
                        VALUES ('$txtEmail', '$txtPhone', '$txtFirstName', '$txtLastName', '$hashedPassword', '$txtBirthDate', '$txtBirthPlace', '$txtWeight', '$txtHeight', '$txtSex')";

          $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

          $rs = mysqli_query($con, $sql);

          if ($rs) {
            echo "<script>
                                  alert('Dane kontaktowe zostały dodane');
                                  window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
                                  </script>";
          }
        }
      } else {
        echo "<script>
              alert('Hasła nie są zgodne!');
              window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
              </script>";
      }
    }
  } catch (Exception $e) {
    echo 'Error occured!';
  }
?>