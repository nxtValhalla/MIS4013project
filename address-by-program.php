<?php
require_once("util-db.php");
require_once("model-address-by-program.php");

$pageTitle = "Gym Address by Program";
include "view-header.php";
?>

    <link rel="stylesheet" href="background-image.css">
    <link rel="stylesheet" href="page-heading.css">
    <link rel="stylesheet" href="content-box.css">
    <link rel="stylesheet" href="sticky-header.css">
    <link rel="stylesheet" href="gym-map.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <h1 class="page-header">Gym Address</h1>

<?php
$addressbyprogram = selectAddressByProgram($_POST['programID']);
include "view-address-by-program.php";
include "view-footer.php";
?>
