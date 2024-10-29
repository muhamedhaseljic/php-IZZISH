<?php

require_once 'config/config.php';
require_once 'radnik/Radnik.php';

$radnik = new Radnik();
$radnik->logout();

header('Location: http://localhost/retro/index.php?page=deductions');
exit;

?>