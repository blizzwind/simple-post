<?php
require "config.php";

$TEXT = $_POST["text"];
$SQL = 	"INSERT INTO post (text) VALUES ('".$TEXT."')";

mysqli_query($CONN, $SQL);

echo "<br><div>&nbsp;&nbsp;&nbsp;&nbsp;Successfully posted!</div><br>";
