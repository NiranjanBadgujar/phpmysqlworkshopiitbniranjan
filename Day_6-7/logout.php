<?php

session_start();
session_unset();

session_destroy();

echo "You've been logged out. <a href='homepage.php'>Click here</a> to return.";

?>