<?php
session_start();
session_destroy();
header("Location: tarinat.php");
exit;