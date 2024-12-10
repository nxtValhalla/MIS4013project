<div class="hero">
      <div class="container my-4">
            <div class="row mb-3 d-flex align-items-center">
                <div class="col d-flex justify-content-start align-items-center">
                  <h1>Contact Us!</h1>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                  <?php include "view-trainers-addform.php"; ?>
                  <h2 class="ms-3">Add a New Trainer</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                  <?php
                  while ($trainer = $trainers->fetch_assoc()){
                  ?>
                  <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card mx-auto" style="width: 20rem;">
                          <img src="ACX_SquareLogo2.png" class="card-img-top">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $trainer['TrainerName']; ?></h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><strong>Specialization:</strong> <?php echo $trainer['Specialization']; ?></li>
                              <li class="list-group-item"><strong>Email:</strong> <?php echo '<a href="mailto:' . htmlspecialchars($trainer['Email']) . '">' . htmlspecialchars($trainer['Email']) . '</a>';?></li>
                              <li class="list-group-item"><strong>Phone:</strong> <?php echo $trainer['Phone']; ?></li>
                          </ul>
                          <div class="card-body">
                              <a href="#" class="card-link">Another link</a>
                          </div>
                        </div>
                  </div>
                  <?php } ?>
            </div>
            <div class="container-fluid mt-5">
            <div class="text-center">
                <p style = "font-size: 2rem;">
                      Check out our <a href="https://www.instagram.com/acxhandlefitness/" target="_blank">Instagram</a> to stay updated with our content!
                </p>
            </div>
      </div>
      </div>
</div>
