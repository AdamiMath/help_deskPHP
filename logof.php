
<?php
session_start();

//destruir array Session
session_destroy();
header('Location: index.php');

?>