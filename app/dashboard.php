<?php
require_once "../config/config.php";
require_once "../inc/header.php";
if(!$radnik->is_logged())
{
    header('Location: http://localhost/retro/index.php?page=deductions');
    exit;
}
?>


  
<div class="custom-container d-flex">
<?php require_once "../inc/sidebar.php"; ?>

  
<?php $page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>
<?php include $page .".php" ?>

<?php

require_once "../inc/footer.php";

?>