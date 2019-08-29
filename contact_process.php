<?php
if (empty($_POST)) {
    // exit termine le script en cours en affichant un message à l'écran
    //exit("Merci de remplir le formulaire de contact");

    // Redirection : on envoie une en-tête HTTP de redirection au client
    // Il faut qu'aucun contenu HTML ou texte brut n'ait été envoyé avant
    header('Location: index.php');
    die();
}

// Traitement du formulaire
// var_dump($_POST);

// Traitement du fichier
if (array_key_exists('infos', $_FILES)) {
    $tmp_name = $_FILES['infos']['tmp_name'];
    $filename = $_FILES['infos']['name'];
    $upload_folder = $_SERVER['DOCUMENT_ROOT'] . '/hoc2019/uploads/';

    // $_SERVER['DOCUMENT_ROOT']

    if (
        is_uploaded_file($tmp_name) &&
        move_uploaded_file(
            $tmp_name,
            $upload_folder . $filename
        )
    ) {
        echo "Votre fichier a bien été enregistré !<br />";
    }
}

echo "Merci pour votre demande, " . $_POST["nom"] . " " . $_POST["prenom"];
