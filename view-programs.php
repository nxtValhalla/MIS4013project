<div class="hero">
      <div class="row mb-3 d-flex align-items-center">
            <div class="col d-flex justify-content-start align-items-center">
                  <h1>View Our Programs!</h1>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                  <?php include "view-programs-addform.php"; ?>
                  <h2 class="ms-3">Add a New Program</h2>
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
            </div>
          </div>
        </div>
        <?php 
        $counter++;
        } 
        ?>
      </div>
</div>
