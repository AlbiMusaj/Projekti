<div class="hero">
<?php
    include 'INC/header.php';
?>
</div>

<?php

if(isset($_POST['shto'])){
    $emri = $_POST['emri'];
    $produkti = $_POST['produkti'];
    $pershkrimi = $_POST['pershkrimi'];
    $res = shtoProdukt($emri , $produkti , $pershkrimi);
}
if(isset($_POST['modifiko'])){
    $pid = $_GET['pid'];
    $emri = $_POST['emri'];
    $produkti = $_POST['produkti'];
    $pershkrimi = $_POST['pershkrimi'];
    $res = modifikoProdukt($pid , $emri , $produkti , $pershkrimi);
}

?>

<section id="content" class="box">
<form id="login" class="box" method="post">
    <?php if(isset($_GET['pid'])){
        $pid = mysqli_fetch_assoc(merrProduktinID($_GET['pid']));  
      echo  "<legend>Modifiko produkt</legend>";
    } else {

     echo   "<legend>Shto produkt</legend>";
    }
        ?>
        <fieldset>
            <label>Emri: </label>
            <input type="text" name="emri" id="emri" value="<?php  if(isset($_GET['pid'])) echo $pid['emri']; ?>">
        </fieldset>
        <fieldset>
            <label>Produkti </label>
            <input type="text" name="produkti" id="produkti" value="<?php  if(isset($_GET['pid'])) echo $pid['produkti']; ?>">
        </fieldset>
        <fieldset>
            <label>Pershkrimi </label>
            <input type="text" name="pershkrimi" id="pershkrimi" value="<?php  if(isset($_GET['pid'])) echo $pid['pershkrimi']; ?>">
        </fieldset>
        <?php  if(isset($_GET['pid'])) { ?>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            <?php  }else{ ?>
            <input type="submit" name="shto" id="shto" value="shto">
            <?php  } ?>
    </form>
</section>