<?php

require '../header.php';

unset($_SESSION["user"]);

header("Location: /users/login.php");
exit(); // Important to stop further script execution

?>