<?php
function selectProgramsByTrainer($TrainerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.TrainerID, TrainerName, Specialization, ProgramName, ProgramDescription FROM project.trainer t join project.program p on t.TrainerID = p.TrainerID WHERE t.TrainerID = ?");
        $stmt->bind_param("i", $TrainerID);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
