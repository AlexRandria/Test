// Pour se connecter
<?php session_start();
print_r($_SESSION);

$_SESSION['email'] = 'alex@gmail.com';
print_r($_SESSION);

// Pour se déconnecter
// session_destroy();