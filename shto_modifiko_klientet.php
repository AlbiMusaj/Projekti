<div class="hero">
<?php
    include 'INC/header.php';
    if(isset($_SESSION['id']) && $_SESSION['roli'] == "Staff"){
    }else{
        header("Location: Projekti.php");
    }
?>
</div>

<?php

if(isset($_POST['shto'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $passowrd = $_POST['password'];
    $roli = $_POST['roli'];
    $res = shtoKlient($emri , $mbiemri , $email , $password , $roli);
}
if(isset($_POST['modifiko'])){
    $klientetId = $_GET['klinetetid'];
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['roli'];
    $res = modifikoklientet($klientetId , $emri , $mbiemri , $email , $password , $role);
}

?>

<section id="content" class="box">
<form id="login" class="box" method="post">
    <?php if(isset($_GET['klinetetid'])){
        $klientetId = mysqli_fetch_assoc(merrklientetId($_GET['klinetetid']));  
      echo  "<legend>Modifiko produkt</legend>";
    } else {

     echo   "<legend>Shto produkt</legend>";
    } 
        ?>
        <fieldset>
            <label>Emri: </label>
            <input type="text" name="emri" id="emri" value="<?php  if(isset($_GET['klinetetid'])) echo $klientetId['emri']; ?>">
        </fieldset>
        <fieldset>
            <label>Mbiemri </label>
            <input type="text" name="mbiemri" id="mbiemri" value="<?php  if(isset($_GET['klinetetid'])) echo $klientetId['mbiemri']; ?>">
        </fieldset>
        <fieldset>
            <label>Email </label>
            <input type="text" name="email" id="email" value="<?php  if(isset($_GET['klinetetid'])) echo $klientetId['email']; ?>">
        </fieldset>
        <fieldset>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php  if(isset($_GET['klinetetid'])) echo $klientetId['password']; ?>">
        </fieldset>
        <fieldset>
            <label for="roli">Roli</label>
            <input type="roli" name="roli" id="roli" value="<?php  if(isset($_GET['klinetetid'])) echo $klientetId['role']; ?>">
        </fieldset>
        <?php  if(isset($_GET['klinetetid'])) { ?>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            <?php  }else{ ?>
            <input type="submit" name="shto" id="shto" value="shto">
            <?php  } ?>
    </form>
</section>