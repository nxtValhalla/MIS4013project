<?php
require_once("util-db.php");
require_once("model-program-comparison.php");

$pageTitle = "Program Comparison";
include "view-header.php";
?>
    <link rel="stylesheet" href="background-image.css">
    <link rel="stylesheet" href="page-heading.css">
    <link rel="stylesheet" href="comparison-content-box.css">
    <link rel="stylesheet" href="sticky-header.css">
    <h1 class="page-header">Program Comparison</h1>
<?php
$programStatData = getProgramComparison();

$programs = [];
while ($row = $programStatData->fetch_assoc()) {
    $programs[] = $row;
}

include "view-program-comparison.php";
include "view-footer.php";
?>
