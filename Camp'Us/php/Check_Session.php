<?php
if (empty($_SESSION['prenom'])) {
    echo "<script type='text/javascript'>document.location.replace('bienvenue.php');</script>";
}
?>
