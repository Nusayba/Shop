<form>
    <fieldset>
        <legend>Inscription</legend>
        <p>Nom : <input type="text" id='nom' name='nom'></p>
        <p>Prénom : <input type="text" id='prenom' name='prenom'></p>
        <p>Pseudo : <input type="text" id='pseudo' name='pseudo'></p>
        <p>Email : <input type="email" id='email' name='email'></p>
        <p>Password : <input type="password" id='password' name='password'></p>
        <p>Adresse : <textarea id='adresse' name="adresse"/></p>
        <input type="button" value="Valider" class="btn-primary" onclick="$('#contain-page').load('./sql/inscriptionBDD.php');">
         
        
    </fieldset>
</form>