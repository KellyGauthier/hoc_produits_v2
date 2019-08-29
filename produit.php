<?php
require_once 'src/utils.php';
require_once 'src/produits_functions.php';
require_once 'data/produit/produits.php';
require_once 'layout/header.php';

// Vérification de l'existence d'un paramètre d'URL nommé "id"
// Si la clé "id" n'existe pas dans l'URL, on redirige vers la page d'accueil
if (!array_key_exists('id', $_GET)) {
    redirect('index.php');
}
// Si on a passé la condition précédente, c'est-à-dire qu'on n'est pas entré dedans,
// alors cela signifie que le paramètre "id" existe bel et bien
// On peut donc l'affecter à une variable $id
$id = $_GET['id'];

// On peut donc appeler notre fonction search_produit, en lui passant en paramètres
// l'ID récupéré de l'URL, et les données produits qu'on a importées en ligne 4
// avec require_once
$produit = search_produit($id, $produits);

// La signature de la fonction search_produit nous indique que la fonction
// peut retourner un tableau (array) ou une valeur nulle (le point d'interrogation devant array nous l'indique : le type est "nullable")
// Par ailleurs, on a indiqué dans la documentation de la fonction qu'on retournait une valeur nulle si aucun produit n'était trouvé
// On peut donc vérifier à l'aide d'une condition si la variable $produit est égale à null, et terminer l'exécution du script si c'est le cas, car cela signifie qu'aucun produit n'a été trouvé
if ($produit === null) {
    exit('Ce produit n\'existe pas');
}

// On affiche notre produit à l'aide d'un template
// Ce template manipule une variable nommée $produit
// C'est pour ça que juste avant on affecte notre produit
// à une variable nommée $produit
require_once 'templates/produit/produit-single.php';

require_once 'layout/footer.php';
