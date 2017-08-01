
<script>
    function affichePanier(){
        $.get("./pages/panier.php", function( data ) {
                
        $("#contain-page").html(data);
        });
    }

</script>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    
                    <?php 
                        if (!isset($_SESSION['loginShop'])) {
                            
                        }else{
                    ?>
                        <li>
                            <a onclick="$('#contain-page').load('./pages/monCompte.php')">Mon compte</a>
                        </li>
                    <?php
                        }
                    
                    
                    ?>
                    
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <?php 
                        if (isset($_SESSION['loginShop'])) {
                        $id_client=$_SESSION['id_client'];
                        $nbPanier=$mysql->query("SELECT count(*) FROM sa_article_commande JOIN sa_commande ON sa_commande.id=sa_article_commande.commande_id JOIN sa_client ON sa_client.id=sa_commande.client_id WHERE sa_client.id=$id_client AND sa_commande.etat='panier'");
                        $leNbPanier=$nbPanier->fetchAll();
                        }
                    ?>
                    <li>
                        <a onclick="affichePanier()">Panier <?php if (isset($_SESSION['loginShop'])) { ?><span class="bullePanier" id="panierRouge"><?php echo $leNbPanier[0][0] ; ?></span><?php } ?></a>
                        
                    </li>
                </ul>
            </div>

