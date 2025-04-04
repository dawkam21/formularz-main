<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Strona administratora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='adminStyle.php'>
    <script src='logApp.js'></script>
</head>
<body>
    <main>
        <div class="container">

            <div class="content">
                <!-- <h3>Witaj, <span><?php echo $_SESSION['name']; ?></span></h3> -->
                <h1>Jesteś na poziomie administratora</h1>
                <a href="admin-log.php" class="btn">Zaloguj się</a>
                <a href="admin-register-form.php" class="btn">Zarejestruj się</a>
            </div>

        </div>
    </main>
</body>
</html>