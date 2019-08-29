<?php require_once 'layout/header.php'; ?>

<h1>Contactez-nous</h1>

<form action="contact_process.php" method="POST" enctype="multipart/form-data">
    <p>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" />
    </p>

    <p>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" />
    </p>

    <p>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" />
    </p>

    <p>
        <label for="infos">Fichier d'informations :</label>
        <input type="file" name="infos" id="infos" />
    </p>

    <p>
        <label for="subject">Objet :</label>
        <input type="text" name="subject" id="subject" />
    </p>

    <p>
        <label for="message">Message :</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </p>

    <p>
        <input type="submit" value="Envoyer" />
    </p>

</form>

<?php require_once 'layout/footer.php'; ?>