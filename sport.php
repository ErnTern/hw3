<?php
require_once("util-db.php");
require_once("model.sport.php");

$pgaetitle = "Sports";
include "view-header.php";
$sports = selectSport();
include "view-sport.php";
include "view-footer.php";
?>

