<?php
require_once "layout/header.php";
require_once "src/ProduitDb.php";
require_once "src/View.php";

$dbProduit = new ProduitDb();
$produits = $dbProduit->getAll();

foreach ($produits as $produit) {
    echo View::render(
        'templates/produit/produit-single-db.php',
        ['produit' => $produit]
    );
}

// $res = $db->getConnection()->query('SELECT * FROM produit');
// while ($row = $res->fetch()) {
//     echo View::render(
//         'templates/produit/produit-single-db.php',
//         ['produit' => $row]
//     );
// }

require_once "layout/footer.php";
