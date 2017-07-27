<?php
session_start();
//session_destroy();
unset($_SESSION['a']);
header("Location: login.php?err=logout");
?>