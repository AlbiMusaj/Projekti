<div class="superman">
<?php
    include 'INC/header.php';
?>
</div>

<?php

if(isset($_POST['shto'])){
    $lloji = $_POST['lloji'];
    $sasia = $_POST['sasia'];
    $cmimi = $_POST['cmimi'];
    $res = shtobedroom($lloji , $sasia , $cmimi);
}
if(isset($_POST['modifiko'])){
    $bid = $_GET['bid'];
    $lloji = $_POST['lloji'];
    $sasia = $_POST['sasia'];
    $cmimi = $_POST['cmimi'];
    $res = modifikobedroom($bid , $lloji , $sasia , $cmimi);
}

?>

<section id="content" class="box">
<form id="login" class="box" method="post">
    <?php if(isset($_GET['bid'])){
        $bid = mysqli_fetch_assoc(merrbedroomID($_GET['bid']));  
      echo  "<legend>Modifiko bedroom</legend>";
    } else {

     echo   "<legend>Shto bedroom</legend>";
    }
        ?>
        <fieldset>
            <label>Lloji: </label>
            <input type="text" name="lloji" id="lloji" value="<?php  if(isset($_GET['bid'])) echo $bid['lloji']; ?>">
        </fieldset>
        <fieldset>
            <label>Sasia </label>
            <input type="text" name="sasia" id="sasia" value="<?php  if(isset($_GET['bid'])) echo $bid['sasia']; ?>">
        </fieldset>
        <fieldset>
            <label>Cmimi </label>
            <input type="text" name="cmimi" id="cmimi" value="<?php  if(isset($_GET['bid'])) echo $bid['cmimi']; ?>">
        </fieldset>
        <?php  if(isset($_GET['bid'])) { ?>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            <?php  }else{ ?>
            <input type="submit" name="shto" id="shto" value="shto">
            <?php  } ?>
    </form>
</section>