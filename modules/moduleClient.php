
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
                        
                        $id_client=$_SESSION['id_client'];
                        $nbPanier=$mysql->query("SELECT count(*) FROM article_commande JOIN commande ON commande.id=article_commande.commande_id JOIN client ON client.id=commande.client_id WHERE client.id=$id_client AND commande.etat='panier'");
                        $leNbPanier=$nbPanier->fetchAll();
                    ?>
                    <li>
                        <a onclick="affichePanier()">Panier <?php if (isset($_SESSION['loginShop'])) { ?><span class="bullePanier" id="panierRouge"><?php echo $leNbPanier[0][0] ; ?></span><?php } ?></a>
                        
                    </li>
                </ul>
            </div>

