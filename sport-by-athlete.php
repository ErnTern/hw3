<?php
require_once("util-db.php");
require_once("model.sport-by-athlete.php");

$pgaetitle = "Sports played by Athletes";
include "view-header.php";
$sports = selectSportByAthlete($_GET['id']);
include "view-sport-by-athlete.php";
include "view-footer.php";
?>
