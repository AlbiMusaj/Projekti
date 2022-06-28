<?php
include_once 'INC/functions.php';
session_start();
?>
<?php
    if(isset($_SESSION['id'])){
        echo "<script>
        alert('You are already logged in!');
        window.location.href='Projekti.php';
        </script>";
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Designe Your House</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body id="loginPage">

<header class="header">
    <div class="log">
        <a href="Projekti.php">
        <img src="Images/logo.jpg" class="logo">
        </a>
    </div>
</header>

<?php

if (isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    login($email, $password);
}

?>

<div class="loginForma container">
    <div class="formaLogin">
        <h1>Login</h1>
        <form method="post" action="#">
            <div>
                <input type="text" name="email" placeholder="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'];?>"> <br>
                <input type="password" name="password" placeholder="password">
            </div>

            <div class="loginFormFooter">
                <span>Nuk keni akoma account? <br> <a href="regjistrohu.php">Regjistrohu</a></span> <br>
                <button id="login" name="login" href="#">Login</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
