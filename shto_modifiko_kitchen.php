<div class="batman">
<?php
    include 'INC/header.php';
    if(isset($_SESSION['id']) && $_SESSION['roli'] == "Staff" && $_SESSION['roli'] == "Puntor"){
    }else{
        header("Location: Projekti.php");
    }
?>
</div>

<?php

if(isset($_POST['shto'])){
    $lloji = $_POST['lloji'];
    $sasia = $_POST['sasia'];
    $cmimi = $_POST['cmimi'];
    $res = shtokitchen($lloji , $sasia , $cmimi);
}
if(isset($_POST['modifiko'])){
    $kid = $_GET['kid'];
    $lloji = $_POST['lloji'];
    $sasia = $_POST['sasia'];
    $cmimi = $_POST['cmimi'];
    $res = modifikokitchen($kid , $lloji , $sasia , $cmimi);
}

?>

<section id="content" class="box">
<form id="login" class="box" method="post">
    <?php if(isset($_GET['kid'])){
        $kid = mysqli_fetch_assoc(merrkitchenID($_GET['kid']));  
      echo  "<legend>Modifiko kitchen</legend>";
    } else {

     echo   "<legend>Shto kitchen</legend>";
    }
        ?>
        <fieldset>
            <label>Lloji: </label>
            <input type="text" name="lloji" id="lloji" value="<?php  if(isset($_GET['kid'])) echo $kid['lloji']; ?>">
        </fieldset>
        <fieldset>
            <label>Sasia </label>
            <input type="text" name="sasia" id="sasia" value="<?php  if(isset($_GET['kid'])) echo $kid['sasia']; ?>">
        </fieldset>
        <fieldset>
            <label>Cmimi </label>
            <input type="text" name="cmimi" id="cmimi" value="<?php  if(isset($_GET['kid'])) echo $kid['cmimi']; ?>">
        </fieldset>
        <?php  if(isset($_GET['kid'])) { ?>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            <?php  }else{ ?>
            <input type="submit" name="shto" id="shto" value="shto">
            <?php  } ?>
    </form>
</section>