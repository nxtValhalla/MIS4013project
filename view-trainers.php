<div class="hero">
      <div class="container my-4">
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
                <p>Check out our <a href="https://www.instagram.com/acxhandlefitness/" target="_blank">Instagram</a> to stay updated with our content!</a>!</p>
            </div>
      </div>
      </div>
</div>
