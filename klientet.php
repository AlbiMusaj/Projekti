<div class="hulk">
<?php
include 'inc/header.php';
?>
</div>
<?php
    if(isset($_SESSION['id']) && $_SESSION['roli'] == "Staff"){
    }else{
        header("Location: Projekti.php");
    }
?>
<section class="list-entity container">
    <div class="image">
        <img src="img/clients.jpg" alt="">
    </div>
    <table id="customers">
        <thead>
        <tr>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Roli</th>
            <th>Email</th>
            <th>Modifiko</th>
            <th>Fshiej</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $result = merrklientet();
        if ($result) {
            while ($klientet = mysqli_fetch_assoc($result)) {

                echo "<tr class='active-row'>";
                echo "<td>" . $klientet['emri'] . "</td>";
                echo "<td>" . $klientet['mbiemri'] . "</td>";
                echo "<td>" . $klientet['role'] . "</td>";
                echo "<td>" . $klientet['email'] . "</td>";
                echo "<td><a href='shto_modifiko_klientet.php?klinetetid=".$klientet['klinetetid'] . "'><i class='fas fa-edit'></i></a></td>";

                ?>
                    <td>
                <form action="fshij_klientet.php" method="post">
                    <input type="text" name="klinetetid" hidden value="<?php echo $klientet['klinetetid']; ?>">

                    <button type="submit" style="border: none;background-color:transparent;cursor:pointer;"
                                    name="btnFshij" onclick="return fshijklientet()">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <script>
                            function fshijklientet() {
                                $confirm = confirm('A jeni te sigurt qe doni ta fshini klientin?');
                                if ($confirm) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }

                        </script>
                    </td>
        <?php
        echo '</tr>';

            }
        }
        ?>


        </tbody>
    </table>
    <a style="margin-left:50%" href="shto_modifiko_klientet.php" id="add_entity"><i class="fas fa-plus"></i> Shto klientin</a>
</section>

<?php
include 'inc/footer.php';
?>
