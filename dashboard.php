<?php
require_once "config/config.php";
require_once "header.php";

?>


  
<div class="custom-container d-flex">
<?php require_once "sidebar.php"; ?>

  
<?php $page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>
<?php include $page .".php" ?>

<?php

require_once "footer.php";

?>