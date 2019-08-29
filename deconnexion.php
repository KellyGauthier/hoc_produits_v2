<?php
require_once 'src/utils.php';

session_start();
// On peut utiliser session_destroy aussi mais la doc nous indique qu'il est préférable de réinitialiser le tableau quand on veut détruire la session
// https://www.php.net/manual/en/function.session-destroy.php
$_SESSION = [];

redirect('index.php');
