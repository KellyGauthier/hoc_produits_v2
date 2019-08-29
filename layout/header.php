<?php session_start();
$theme = '';
if (array_key_exists('theme', $_SESSION) && $_SESSION['theme'] == 'dark') {
    $theme = 'dark';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet" media="screen" />
    <title>Produits</title>
</head>

<body class="<?php echo $theme; ?>">
    <div class="theme_switcher">
        <a href="changetheme.php">
            <?php if ($theme == 'dark') {
                echo "Thème clair";
            } else {
                echo "Thème sombre";
            } ?>
        </a>
    </div>