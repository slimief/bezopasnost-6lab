<?php
session_start();
if($_GET['do'] == 'logout'){
unset($_SESSION['da']);
header('Location: ../php3lab.php');
session_destroy();
exit;
}

