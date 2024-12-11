<div class="hero">
  <div class="container my-4">
    <div class="row mb-3">
      <div class="col-6 d-flex justify-content-start align-items-center">
        <h2>Programs by Trainer!</h2>
      </div>
    </div>
    <?php
    while ($trainer = $trainers->fetch_assoc()) {
      $accordionId = "accordionTrainer" . $trainer['TrainerID'];
    ?>
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">ID: <?php echo $trainer['TrainerID']; ?> - Name: <?php echo $trainer['TrainerName']; ?></h5>
          <div class="accordion" id="<?php echo $accordionId; ?>">
            <?php
            $counter = 1;
            $programs = selectProgramsByTrainer($trainer['TrainerID']);
            while ($program = $programs->fetch_assoc()) {
              $collapseId = "collapseTrainer" . $trainer['TrainerID'] . "Program" . $counter;
              $headingId = "headingTrainer" . $trainer['TrainerID'] . "Program" . $counter;
            ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                  <button class="accordion-button <?php echo $counter === 1 ? '' : 'collapsed'; ?>" 
                          type="button" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#<?php echo $collapseId; ?>" 
                          aria-expanded="<?php echo $counter === 1 ? 'true' : 'false'; ?>" 
                          aria-controls="<?php echo $collapseId; ?>">
                    <?php echo htmlspecialchars($program['ProgramName']); ?>
                  </button>
                </h2>
                <div id="<?php echo $collapseId; ?>" 
                     class="accordion-collapse collapse <?php echo $counter === 1 ? 'show' : ''; ?>" 
                     data-bs-parent="#<?php echo $accordionId; ?>">
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
                  </div>
                </div>
              </div>
            <?php
              $counter++;
            }
            ?>
          </div>
        </div>
        <p class="card-text"><small class="text-body-secondary">Specialization: <?php echo $trainer['Specialization']; ?></small></p>
      </div>
    <?php
    }
    ?>
  </div>
</div>
