<div class="hero">
      <div class="container my-4">
            <div class="row justify-content-center">
                  <?php
                  while ($trainer = $trainers->fetch_assoc()){
                  ?>
                  <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card mx-auto" style="width: 18rem;">
                          <img src="AXC_SquareLogo2.png" class="card-img-top">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $trainer['TrainerName']; ?></h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><strong>Specialization:</strong> <?php echo $trainer['Specialization']; ?></li>
                              <li class="list-group-item"><strong>Email:</strong> <?php echo $trainer['Email']; ?></li>
                              <li class="list-group-item"><strong>Phone:</strong> <?php echo $trainer['Phone']; ?></li>
                          </ul>
                          <div class="card-body">
                              <a href="mailto:<?php echo $trainer['Email']; ?>" class="card-link">Send an Email</a>
                              <a href="#" class="card-link">Another link</a>
                          </div>
                        </div>
                  </div>
                  <?php } ?>
            </div>
      </div>
</div>
