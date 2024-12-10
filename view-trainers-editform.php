<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editTrainerModal<?php echo $trainer['TrainerID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editTrainerModal<?php echo $trainer['TrainerID'];?>" tabindex="-1" aria-labelledby="editTrainerModalLabel<?php echo $trainer['TrainerID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editTrainerModalLabel<?php echo $trainer['TrainerID'];?>">Edit Trainer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="trainerName<?php echo $trainer['TrainerID'];?>" class="form-label">Trainer Name</label>
            <input type="text" class="form-control" id="trainerName<?php echo $trainer['TrainerID'];?>" name="trainerName" value="<?php echo $trainer['TrainerID'];?>">
          </div>
          <div class="mb-3">
            <label for="spec<?php echo $trainer['TrainerID'];?>" class="form-label">Specialization</label>
            <input type="text" class="form-control" id="spec<?php echo $trainer['TrainerID'];?>" name="spec" value="<?php echo $trainer['Specialization'];?>">
          </div>
          <div class="mb-3">
            <label for="email<?php echo $trainer['TrainerID'];?>" class="form-label">Email</label>
            <input type="text" class="form-control" id="email<?php echo $trainer['TrainerID'];?>" name="email" value="<?php echo $trainer['Email'];?>">
          </div>
          <div class="mb-3">
            <label for="phone<?php echo $trainer['TrainerID'];?>" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone<?php echo $trainer['TrainerID'];?>" name="phone" value="<?php echo $trainer['Phone'];?>">
          </div>
            <input type="hidden" name="trainerid" value="<?php echo $trainer['TrainerID'];?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
