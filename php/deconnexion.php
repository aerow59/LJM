<?php
session_start();
unset($_SESSION['nomUser']);
unset($_SESSION['prenomUser']);
unset($_SESSION['nomLevelUser']);
session_destroy(); 
header('Location: ../index.php');

