<?php

if (empty($_SESSION['id_user'])) {
  echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
}

?>
