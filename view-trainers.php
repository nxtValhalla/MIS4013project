<div class="hero">
      <div class="container my-4">
            <div class="row mb-3 d-flex align-items-center">
                <div class="col d-flex justify-content-start align-items-center">
                  <h2>Contact Us!</h2>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                  <h2 class="ms-3">Add a New Trainer</h2>
                  </br>
                  <?php include "view-trainers-addform.php"; ?>
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
                              <?php include "view-trainers-editform.php"; ?>
                              <form method="post" action="">
                                <input type="hidden" name="trainerid" value="<?php echo $trainer['TrainerID'];?>">
                                <input type="hidden" name="actionType" value="Delete">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm deletion of <?php echo $trainer['TrainerName'];?>');">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                  </svg>
                                </button>
                              </form>
                          </div>
                        </div>
                  </div>
                  <?php } ?>
            </div>
            <div class="container-fluid mt-5">
            <div class="text-center">
                <p style = "font-size: 1.8rem;">
                      Check out our <a href="https://www.instagram.com/acxhandlefitness/" target="_blank">Instagram</a> to stay updated with our content!
                </p>
            </div>
      </div>
      </div>
</div>
