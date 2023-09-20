<?php
require_once("util-db.php");
require_once("model.athlete.php");

$pgaetitle = "Athletes";
include "view-header.php";
$athletes = selectAthlete();
include "view-athlete.php";
include "view-footer.php";
?>
