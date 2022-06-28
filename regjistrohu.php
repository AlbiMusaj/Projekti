<?php
include_once 'INC/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Designe Your House</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body id="loginPage">

<header class="header">
    <div class="logo">
        <a href="Projekti.php">
           <img src="Images/logo.jpg" class="logo">
        </a>
    </div>
</header>

<?php
if (isset($_POST['regjistrohu'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    regjistrohu($emri, $mbiemri, $email, $password);

    header("Location: login.php");
}
?>

<div class="loginForma container">
    <div class="formaLogin">
        <h1>Register</h1>
        <form method="post" action="#">
            <div>
                <input type="text" name="emri" placeholder="Emri"> <br>
                <input type="text" name="mbiemri" placeholder="Mbiemri">
            </div>
            <div>
                <input type="email" name="email" placeholder="email"> <br>
            </div>
            <div>
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="loginFormFooter">
                <button id="login" name="regjistrohu" href="#">Regjistrohu</button>
            </div>
        </form>
    </div>
</div>

</body>

</html>
