<form method="POST">
<?php if ($error) { ?>
<p style="color: red; font-weight: bold;">
    Les informations fournies n'ont pas permis de vous identifier
</p>
<?php } ?>
<p>
    <label for="username">Login</label>
    <input type="text" name="username" id="username" placeholder="Login...">
</p>

<p>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" placeholder="Mot de passe...">
</p>

<p>
    <input type="submit" value="Connexion">
</p>
</form>