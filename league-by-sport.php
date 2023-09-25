<?php
require_once("util-db.php");
require_once("model.league-by-sport.php");

$pgaetitle = "League by Sports";
include "view-header.php";
$leagues = selectLeagueBySport($_POST['lid']);
include "view-league-by-sport.php";
include "view-footer.php";
?>
