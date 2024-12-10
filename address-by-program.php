<?php
require_once("util-db.php");
require_once("model-address-by-program.php");

$pageTitle = "Gym Address by Program";
include "view-header.php";

// // Check if $_POST['lid'] is set and pass it to the query
// if (isset($_POST['lid'])) {
//     $lid = $_POST['lid'];
//     echo "Location ID: " . $lid; // Debugging line to verify POST data

$addressbyprogram = selectAddressByProgram($_POST['programID']);

//     if ($addressbylocation->num_rows > 0) {
//         include "view-address-by-location.php";
//     } else {
//         echo "No results found for Location ID: " . $lid;
//     }
// } else {
//     echo "Location ID not set!";
// }
  
include "view-address-by-program.php";
include "view-footer.php";
?>
