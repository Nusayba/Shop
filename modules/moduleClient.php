

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
                            <a href="#">Mon compte</a>
                        </li>
                    <?php
                        }
                    
                    
                    ?>
                    
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Panier</a>
                    </li>
                </ul>
            </div>

