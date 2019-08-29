<?php 
require_once "layout/header.php"; 
require_once "src/View.php";
?>

<h1>Liste des produits de la base de données</h1>

<?php

$host = '127.0.0.1';
$db   = 'produits_hoc_php_2019';
$user = 'hoc_php_2019';
$pass = 'phpUser';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    var_dump($pdo);
} catch (\PDOException $e) {
    echo "Erreur lors de la connection à la base de données" . $e->getMessage();
}

$res = $pdo->query('SELECT * FROM produit');
while ($row = $res->fetch()) {
    echo View::render(
        'templates/produit/produit-single-db.php',
        ['produit' => $row]
    );
}

?>
<?php require_once "layout/footer.php"; ?>
