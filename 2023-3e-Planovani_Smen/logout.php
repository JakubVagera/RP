<?php

/**log out code */
/**closes all connection is database */
session_start();

session_destroy();

header("Location: index.php");
exit;
