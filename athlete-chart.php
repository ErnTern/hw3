<?php
require_once("util-db.php");
require_once("model.athlete-chart-db.php");

$pgaetitle = "Athletes chart";
include "view-header.php";
$athletes = selectAthlete();
include "view-athlete-chart.php";
include "view-footer.php";
?>
