<div class="spiderman">
<?php
    include 'INC/header.php';
?>
</div>
    <section class="about">
        <div class="main">
            <img src="Images/dining1.jpg">
            <div class="about-text">
                <h2>The Dining</h2>
                <p>A dining room set can consist of just a table and chairs, or it may include a buffet and/or china cabinet.
                    <br> At Ethan Allen, we don’t sell packaged dining sets; we’re an interior design company, so we believe in giving our clients the freedom to mix and match dining table and chair options.
                    <br>
                    <br>$102.22</p>                    
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/dining2.jpg">
            <div class="about-text">
                <h2>The Dining</h2>
                <p>A dining room set can consist of just a table and chairs, or it may include a buffet and/or china cabinet.
                    <br> At Ethan Allen, we don’t sell packaged dining sets; we’re an interior design company, so we believe in giving our clients the freedom to mix and match dining table and chair options.
                    <br>
                    <br> $89.32</p>    
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/dining3.jpg">
            <div class="about-text">
                <h2>The Dining</h2>
                <p>A dining room set can consist of just a table and chairs, or it may include a buffet and/or china cabinet.
                    <br> At Ethan Allen, we don’t sell packaged dining sets; we’re an interior design company, so we believe in giving our clients the freedom to mix and match dining table and chair options.
                    <br>
                    <br> $58.65</p>
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <table id="customers">
  <tr>
    <th>Lloji</th>
    <th>Sasia</th>
    <th>Cmimi</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
  <?php
    $dining = merrdining();
    if($dining){
        while($tavolina = mysqli_fetch_assoc($dining)){

            echo"<tr>";
            echo"<td>" . $tavolina['lloji'] . "</td>";
            echo"<td>" . $tavolina['sasia'] . "</td>";
            echo"<td>" . $tavolina['cmimi'] . "</td>";
            echo "<td><a href='shto_modifiko_dining.php?did=".$tavolina['did'] . "'><i class='fas fa-edit'></i></a></td>";
            ?>
                <td>
                <form action="fshijdining.php" method="post">
                    <input type="text" name="did" hidden value="<?php echo $tavolina['did']; ?>">

                    <button type="submit" style="border: none;background-color:transparent;cursor:pointer;"
                                    name="btnFshij" onclick="return fshijdining()">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <script>
                            function fshijdining() {
                                $confirm = confirm('A jeni te sigurt qe doni ta fshini dining?');
                                if ($confirm) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }

                        </script>
                </td>
        <?php
        echo "</tr>";
        }
    }
    ?>

</table>
<a style="margin-left:50%" href="shto_modifiko_dining.php" id="add_entity"><i class="add_entity fas fa-plus"></i> Shto lloje</a>
</body>

<?php
    include 'INC/footer.php';
?>
</html> 
