<div class="spiderman">
<?php
    include 'INC/header.php';
?>
</div>

<?php

if(isset($_POST['shto'])){
    $lloji = $_POST['lloji'];
    $sasia = $_POST['sasia'];
    $cmimi = $_POST['cmimi'];
    $res = shtodining($lloji , $sasia , $cmimi);
}
if(isset($_POST['modifiko'])){
    $did = $_GET['did'];
    $lloji = $_POST['lloji'];
    $sasia = $_POST['sasia'];
    $cmimi = $_POST['cmimi'];
    $res = modifikodining($did , $lloji , $sasia , $cmimi);
}

?>

<section id="content" class="box">
<form id="login" class="box" method="post">
    <?php if(isset($_GET['did'])){
        $did = mysqli_fetch_assoc(merrdiningID($_GET['did']));  
      echo  "<legend>Modifiko Dining</legend>";
    } else {

     echo   "<legend>Shto Dining</legend>";
    }
        ?>
        <fieldset>
            <label>Lloji: </label>
            <input type="text" name="lloji" id="lloji" value="<?php  if(isset($_GET['did'])) echo $did['lloji']; ?>">
        </fieldset>
        <fieldset>
            <label>Sasia </label>
            <input type="text" name="sasia" id="sasia" value="<?php  if(isset($_GET['did'])) echo $did['sasia']; ?>">
        </fieldset>
        <fieldset>
            <label>Cmimi </label>
            <input type="text" name="cmimi" id="cmimi" value="<?php  if(isset($_GET['did'])) echo $did['cmimi']; ?>">
        </fieldset>
        <?php  if(isset($_GET['did'])) { ?>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            <?php  }else{ ?>
            <input type="submit" name="shto" id="shto" value="shto">
            <?php  } ?>
    </form>
</section>