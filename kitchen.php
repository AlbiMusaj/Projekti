<div class="batman">
<?php
    include 'INC/header.php';
?>
</div>
    <section class="about">
        <div class="main">
            <img src="Images/kitchen2.jpg">
            <div class="about-text">
                <h2>The Kitchen</h2>
                <>Mid-sized transitional medium tone wood floor and brown floor enclosed kitchen photo in Richmond with 
                    <br> beaded inset cabinets, beige cabinets, quartzite countertops, white backsplash, terra-cotta backsplash, stainless steel appliances, an island and beige countertops  
                    <br>
                    <br> $173.90 </p>
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/kitchen3.jpg">
            <div class="about-text">
                <h2>The Kitchen</h2>
                <>Mid-sized transitional medium tone wood floor and brown floor enclosed kitchen photo in Richmond with 
                    <br> beaded inset cabinets, beige cabinets, quartzite countertops, white backsplash, terra-cotta backsplash, stainless steel appliances, an island and beige countertops  
                    <br>
                    <br> $132.20 </p>
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/kitchen4.jpg">
            <div class="about-text">
                <h2>The Kitchen</h2>
                <>Mid-sized transitional medium tone wood floor and brown floor enclosed kitchen photo in Richmond with 
                    <br> beaded inset cabinets, beige cabinets, quartzite countertops, white backsplash, terra-cotta backsplash, stainless steel appliances, an island and beige countertops  
                    <br>
                    <br> $141.35 </p>
                    <button type="button">Book</button>
            </div>
        </div>
    </section>

</body>
</html>         
<table id="customers">
  <tr>
    <th>Lloji</th>
    <th>Sasia</th>
    <th>Cmimi</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
  <?php
    $kitchen = merrkitchen();
    if($kitchen){
        while($kuzhina = mysqli_fetch_assoc($kitchen)){

            echo"<tr>";
            echo"<td>" . $kuzhina['lloji'] . "</td>";
            echo"<td>" . $kuzhina['sasia'] . "</td>";
            echo"<td>" . $kuzhina['cmimi'] . "</td>";
            echo "<td><a href='shto_modifiko_kitchen.php?kid=".$kuzhina['kid'] . "'><i class='fas fa-edit'></i></a></td>";
            ?>
                <td>
                <form action="fshijkitchen.php" method="post">
                    <input type="text" name="kid" hidden value="<?php echo $kuzhina['kid']; ?>">

                    <button type="submit" style="border: none;background-color:transparent;cursor:pointer;"
                                    name="btnFshij" onclick="return fshijkitchen()">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <script>
                            function fshijkitchen() {
                                $confirm = confirm('A jeni te sigurt qe doni ta fshini kitchen?');
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
<a style="margin-left:50%" href="shto_modifiko_kitchen.php" id="add_entity"><i class="add_entity fas fa-plus"></i> Shto lloje</a>
</body>

<?php
    include 'INC/footer.php';
?>
</html> 
