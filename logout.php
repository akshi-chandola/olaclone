<?php
session_start();
session_destroy();
header("Location: proj_loc.php");
?>