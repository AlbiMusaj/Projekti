<div class="hero">
<?php
    include 'INC/header.php';
?>
</div>

    <section class="about">
        <div class="main">
            <img src="Images/room1.jpg">
            <div class="about-text">
                <h2>The Bedroom</h2>
                <p>At first thought, a bedroom should be designed with a good night’s sleep and relaxation in mind.
                    <br> As a result, you stock up on all the soothing essentials: a neutral color palette, some pretty throw pillows, and an exceptionally cozy comforter </p>
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/kitchen1.jpg">
            <div class="about-text">
                <h2>The Kitchen</h2>
                <p>Mid-sized transitional medium tone wood floor and brown floor enclosed kitchen photo in Richmond with 
                    <br> beaded inset cabinets, beige cabinets, quartzite countertops, white backsplash, terra-cotta backsplash, stainless steel appliances, an island and beige countertops</p>  
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="main">
            <img src="Images/dining.jpg">
            <div class="about-text">
                <h2>The Dining</h2>
                <p>A dining room set can consist of just a table and chairs, or it may include a buffet and/or china cabinet.
                    <br> At Ethan Allen, we don’t sell packaged dining sets; we’re an interior design company, so we believe in giving our clients the freedom to mix and match dining table and chair options.</p>
                    <button type="button">Book</button>
            </div>
        </div>
    </section>
    <table id="customers">
  <tr>
    <th>Emri</th>
    <th>Produkti</th>
    <th>Pershkrimi</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
    <?php
    $produktet = merrProduktet();
    if($produktet){
        while($produkt = mysqli_fetch_assoc($produktet)){

            echo "<tr>";
            echo "<td>" . $produkt['emri'] . "</td>";
            echo "<td>" . $produkt['produkti'] . "</td>";
            echo "<td>" . $produkt['pershkrimi'] . "</td>";
            echo "<td><a href='shto_modifiko_produkt.php?pid=".$produkt['pid'] . "'><i class='fas fa-edit'></i></a></td>";

                ?>
                    <td>
                <form action="fshijprodukt.php" method="post">
                    <input type="text" name="pid" hidden value="<?php echo $produkt['pid']; ?>">

                    <button type="submit" style="border: none;background-color:transparent;cursor:pointer;"
                                    name="btnFshij" onclick="return fshijprodukt()">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <script>
                            function fshijprodukt() {
                                $confirm = confirm('A jeni te sigurt qe doni ta fshini produktin?');
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
<a style="margin-left:50%" href="shto_modifiko_produkt.php" id="add_entity"><i class="add_entity fas fa-plus"></i> Shto Kategori</a>
</body>

<?php
    include 'INC/footer.php';
?>
</html>         

