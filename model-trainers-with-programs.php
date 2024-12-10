<?php
function selectTrainers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT TrainerID, TrainerName, Specialization, Email, Phone FROM project.trainer;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectProgramsByTrainer($TrainerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.TrainerID, TrainerName, Specialization, ProgramID, ProgramName, ProgramDescription FROM project.trainer t join project.program p on t.TrainerID = p.TrainerID WHERE t.TrainerID = ?");
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
