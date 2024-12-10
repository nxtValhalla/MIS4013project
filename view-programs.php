<div class="hero">
      <div class="accordion" id="accordionExample">
        <?php
        $counter = 1; // To create unique IDs for each accordion item
        while ($program = $programs->fetch_assoc()) { // Assuming $programs is your result set
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
              <strong>Program Duration:</strong> <?php echo htmlspecialchars($program['Duration']); ?> Weeks<br>
              <strong>Description:</strong> <?php echo htmlspecialchars($program['ProgramDescription']); ?>
            </div>
          </div>
        </div>
        <?php 
        $counter++; // Increment counter for unique IDs
        } 
        ?>
      </div>
</div>
