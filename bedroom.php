<div class="superman">
<?php
    include 'INC/header.php';
?>
</div>
    <section class="about">
        <div class="main">
            <img src="Images/room4.jpg">
            <div class="about-text">
                <h3>Pinawa 5-Piece Comforter Set</h3>
                <br>
                <br>
                <p>Ready to bring some rustic elegance into your bedroom with this beautiful 5-piece comforter set? 
                <br>This elegant lodge inspired comforter set features rustic western patterns, grizzly bears, and moose roaming the great American forests. Perfect for any season!
                <br>
                <br> $72.19 </p>
                <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/room2.jpg">
            <div class="about-text">
                <h3>Charley 7 Piece Comforter Set</h3>
                <br>
                <br>
                <p>Bring a global elegance to your bedroom with this beautiful comforter set that combines a damask jacquard with solid accent colors of fresh aqua and onyx for a rich look.
                    <br> Constructed of 100% polyester fabric and filling, this bed set comes with one (1) cozy comforter, two (2) shams, one (1) solid bed skirt, and three (3) plushy pillows that flaunt excellent workmanship and quality.
                    <br>
                    <br> $85.49</p>
                <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/room3.jpg">
            <div class="about-text">
                <h3>Samara 7 Piece Comforter Set</h3>
                <br>
                <br>
                <p>Bring a soft, mid-century look to you bedroom with this beautiful 7 piece comforter set. The ivory comforter features geometric prints with soft terry embroidery that adds dimension and charm to the bedding set.
                    <br> Naturally breathable and lightweight fabric combine with embroidery for a perfect all season bedding. Constructed of 100% polyester fabric and filling, this bed set comes with one (1) cozy comforter, two (2) shams, one (1) solid bed skirt, and three (3) plushy pillows that flaunt excellent workmanship and quality.
                    <br>
                    <br> $114.99</p>
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
    $bedroom = merrbedroom();
    if($bedroom){
        while($dhoma = mysqli_fetch_assoc($bedroom)){

            echo"<tr>";
            echo"<td>" . $dhoma['lloji'] . "</td>";
            echo"<td>" . $dhoma['sasia'] . "</td>";
            echo"<td>" . $dhoma['cmimi'] . "</td>";
            echo "<td><a href='shto_modifiko_bedroom.php?bid=".$dhoma['bid'] . "'><i class='fas fa-edit'></i></a></td>";
            ?>
                <td>
                <form action="fshijbedroom.php" method="post">
                    <input type="text" name="bid" hidden value="<?php echo $dhoma['bid']; ?>">

                    <button type="submit" style="border: none;background-color:transparent;cursor:pointer;"
                                    name="btnFshij" onclick="return fshijbedroom()">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <script>
                            function fshijbedroom() {
                                $confirm = confirm('A jeni te sigurt qe doni ta fshini bedroom?');
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
<a style="margin-left:50%" href="shto_modifiko_bedroom.php" id="add_entity"><i class="add_entity fas fa-plus"></i> Shto lloje</a>
</body>

<?php
    include 'INC/footer.php';
?>
</html> 