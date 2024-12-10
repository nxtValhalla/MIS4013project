<div class="hero">
      <div class="container my-4">
      <div class="row mb-3">
            <div class="col-6 d-flex justify-content-start align-items-center">
                  <h2>View Our Programs!</h2>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                  <h2 class="ms-3">Add a New Program</h2>
                  <?php include "view-programs-addform.php"; ?>
            </div>
      </div>
      <div class="accordion" id="accordionExample">
        <?php
        $counter = 1;
        while ($program = $programs->fetch_assoc()) {
        ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
            <button class="accordion-button <?php echo $counter === 1 ? '' : 'collapsed'; ?>" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapse<?php echo $counter; ?>" 
                    aria-expanded="<?php echo $counter === 1 ? 'true' : 'false'; ?>" 
                    aria-controls="collapse<?php echo $counter; ?>">
              <?php echo htmlspecialchars($program['ProgramName']); ?>
            </button>
          </h2>
          <div id="collapse<?php echo $counter; ?>" 
               class="accordion-collapse collapse <?php echo $counter === 1 ? 'show' : ''; ?>" 
               data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <h5 class="mb-3">Program Details</h5>
                  <div class="row text-start">
                  <div class="col-md-6">
                        <p><strong>Duration (Weeks):</strong> <?php echo htmlspecialchars($program['Duration']); ?></p>
                        <p><strong>Days per Week:</strong> <?php echo htmlspecialchars($program['DaysPerWeek']); ?></p>
                  </div>
                  <div class="col-md-6">
                        <p><strong>Difficulty Level (1-7):</strong> <?php echo htmlspecialchars($program['DifficultyLevel']); ?></p>
                        <p><strong>Intensity (1-7):</strong> <?php echo htmlspecialchars($program['Intensity']); ?></p>
                  </div>
                  </div>
                  <h5 class="mt-3">Description</h5>
                  <p><?php echo htmlspecialchars($program['ProgramDescription']); ?></p>
                  <div class="row text-start">
                        <div class="col-md-4">
                              <form action="address-by-program.php" method="POST">
                                <input type="hidden" name="programID" value="<?php echo $program['ProgramID']; ?>">
                                <button type="submit" class="btn btn-primary">Gym Address</button>
                              </form>
                        </div>
                        <div class="col-md-4">
                              <?php include "view-programs-editform.php"; ?>
                        </div>
                        <div class="col-md-4">
                              <form method="post" action="">
                              <input type="hidden" name="programID" value="<?php echo $program['ProgramID'];?>">
                              <input type="hidden" name="actionType" value="Delete">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm deletion of <?php echo $program['ProgramName'];?>');">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                              </svg>
                              </button>
                              </form>
                        </div>
                  </div>
            </div>
          </div>
        </div>
        <?php 
        $counter++;
        } 
        ?>
      </div>
</div>
</div>
