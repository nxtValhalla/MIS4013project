<?php
require_once("util-db.php");
require_once("model-trainers-with-programs.php");

$pageTitle = "Who Trains What?";
include "view-header.php";
?>
    <link rel="stylesheet" href="background-image.css">
    <link rel="stylesheet" href="page-heading.css">
    <link rel="stylesheet" href="content-box.css">
    <link rel="stylesheet" href="sticky-header.css">
    <link rel="stylesheet" href="program-accordion.css">
    <link rel="stylesheet" href="modal-label.css">
    <h1 class="page-header">Programs by Trainer</h1>

<?php
$trainers = selectTrainers();
include "view-trainers-with-programs.php";
include "view-footer.php";
?>
