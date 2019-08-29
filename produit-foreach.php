<?php
// Attention, cette solution n'est pas optimale
// On se base sur un tableau et on effectue un foreach pour itérer dessus
// Quand on évalue la "complexité" d'un algorithme,
// on l'évalue "au pire".
// Ici, "au pire", l'identifiant recherché sera le dernier du tableau
// Donc "au pire", si on a 30 000 000 d'éléments,
// On va se retrouver avec 30 000 000 d'itérations
// Cette solution n'est donc pas recommandée dans un environnement professionnel

// Essayez, dans la mesure du possible, de réflechir à la complexité de vos algorithmes

require_once 'data/produit/produits.php';
require_once 'layout/header.php';
require_once 'src/View.php';

// Si la clé "id" n'existe pas, on redirige vers la page d'accueil
if (!array_key_exists('id', $_GET)) {
    header('Location: index.php');
    die;
}

$id = $_GET['id'];

// J'initialise ma variable $produit à une valeur vide
$produit = null;
foreach ($produits as $produitItem) {
    if ($id == $produitItem['id']) {
        // L'affectation de ma variable $produit est conditionnelle
        $produit = $produitItem;
        // Une fois que j'ai trouvé mon produit, je peux sortir de ma boucle
        break;
    }
}

// Vu que l'affectation de $produit est conditionnelle,
// si aucun produit n'a été trouvé, alors $produit vaut toujours "null"
if ($produit == null) {
    // Je peux donc quitter le script en indiquant un message à l'utilisateur
    exit("Le produit n'existe pas");
}

// Si j'arrive à cette ligne lors de l'exécution de mon code,
// cela signifie que $produit est différent de "null"
// Donc qu'on a trouvé un produit.
// On peut donc inclure le template d'affichage qui s'appuie sur $produit
// require_once 'templates/produit/produit-single.php';
echo View::render(
    'templates/produit/produit-single.php',
    ['produit' => $produitData]
);
require_once 'layout/footer.php';
