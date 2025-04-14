<?php
    $con = mysqli_connect('localhost', 'root', '', 'db_contact');

    $txtLogin = $_POST['txtLogin'];
    $txtPassword = $_POST['txtPassword'];
    $txtPassword2 = $_POST['txtPassword2'];
    $nameError = "";
    $passwordError = "";

    if(isset($_POST['submit'])){
        $txtLogin = $_POST['txtLogin'];
        $txtPassword = $_POST['txtPassword'];

                $sql = "INSERT INTO `tbl_contact` (`id`, 'txtName`, `txtPassword`, `txtPassword2`) VALUES ('0', '$txtLogin', '$txtPassword', '$txtPassword2')";
                
                $rs = mysqli_query($con, $sql);
                
                if($rs) {
                    echo "<script>
                    alert('Dane kontaktowe zostały dodane');
                    window.location.href = '".$_SERVER['HTTP_REFERER']."';
                    </script>";
            }
        }
?>