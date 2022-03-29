<?php
require "config.php";

$ID = $_GET["id"];
$SQL = 	"SELECT text FROM post WHERE id='".$ID."'";

$RESULT = mysqli_query($CONN, $SQL);

if (mysqli_num_rows($RESULT) > 0) {
  $ROW = mysqli_fetch_assoc($RESULT);
  echo $ROW["text"];
} else {
  echo "";
}
