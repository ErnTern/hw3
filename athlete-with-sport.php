<?php
require_once("util-db.php");
require_once("model.athlete-with-sport.php");

$pgaetitle = "Athletes with Sports";
include "view-header.php";
$athletes = selectAthlete();
include "view-athlete-with-sport.php";
include "view-footer.php";
?>
