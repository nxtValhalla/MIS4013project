<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-header">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" style="width:10%;" href="#">Directory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-auto justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainers.php">Meet Our Trainers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="programs.php">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainers-with-programs.php">Who Trains What?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="program-comparison.php">Compare Programs</a>
        </li>
      </ul>
    </div>
    <div class="ms-auto" style="width:10%;">
      <button type="button" class="btn btn-outline-success" onclick="scrollToTop()"><i class="bi bi-arrow-bar-up"></i> Scroll to Top <i class="bi bi-arrow-bar-up"></i></button>
    </div>
  </div>
</nav>
<?php include "js-scroll-to-top.php"; ?>
