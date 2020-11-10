<div class="list-group">
                <a href="acceuil.php" class="list-group-item active"> Tous les Produits </a>
                <?php
                $cats=getAllCategories();
                foreach ($cats as $value) {
                	echo "<a href='acceuil.php?id={$value["id"]}' class='list-group-item '>{$value["description"]}</a>";
                }
               
                ?>
                

 </div>
   