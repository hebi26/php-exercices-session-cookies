
<?php
include('header.php');

$newpseudo = $_POST['pseudo'];
$newmdp = $_POST['mdp'];

setcookie("pseudo", $newpseudo);
setcookie("mdp", $newmdp);

header("location: page3.php");

?>
