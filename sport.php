<?php
require_once("util-db.php");
require_once("model.sport.php");

$pgaetitle = "Sports";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertSport($_POST['sName'], $_POST['sPlaytime']);
      break;
  }
}

$sports = selectSport();
include "view-sport.php";
include "view-footer.php";
?>

