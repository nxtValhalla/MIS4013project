<?php
require_once("util-db.php");
require_once("model-programs.php");

$pageTitle = "Programs";
include "view-header.php";
?>
    <link rel="stylesheet" href="background-image.css">
    <link rel="stylesheet" href="page-heading.css">
    <link rel="stylesheet" href="content-box.css">
    <link rel="stylesheet" href="sticky-header.css">
    <h1 class="page-header">Programs</h1>
<?php
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertProgram($_POST['teamName'], $_POST['wins'], $_POST['losses'], $_POST['locID'])) {
        echo '<div class="alert alert-success" role="alert">Program Added Successfully!</div>';   
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. No Program Added.</div>';
      }
      break;
    case "Edit":
      if (updateProgram($_POST['teamName'], $_POST['wins'], $_POST['losses'], $_POST['locID'], $_POST['teamid'])) {
        echo '<div class="alert alert-success" role="alert">Program Edited Successfully!</div>';   
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. No Program Edited.</div>';
      }
      break;
    case "Delete":
      if (deleteProgram($_POST['programid'])) {
        echo '<div class="alert alert-success" role="alert">Program Deleted Successfully!</div>';   
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. No Program Removed.</div>';
      }
      break;
  }
}

$programs = selectPrograms();
include "view-programs.php";
include "view-footer.php";
?>
