<?php
// auth/handle_logout.php
session_start();
session_unset();
session_destroy();
header("Location: ../login.php");
exit;
