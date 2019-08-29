<?php require_once 'layout/header.php'; ?>

<div class="home">
    <div class="greet">
        <h1>Bienvenue</h1>
        <ul>
            <li><a href="produits.php">Produits</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if (!array_key_exists('userLogin', $_SESSION) ||
                        $_SESSION['userLogin'] === null) { ?>
                <li>
                    <a href="connexion.php">Connexion</a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="deconnexion.php">Déconnexion</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>