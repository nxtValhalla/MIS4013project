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
function insertTrainer($trainerName, $spec, $email, $phone) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO project.trainer (TrainerName, Specialization, Email, Phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $trainerName, $spec, $email, $phone);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateTrainer($trainerName, $spec, $email, $phone, $trainerid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE project.trainer set TrainerName = ?, Specialization = ?, Email = ?, Phone = ? WHERE TrainerID = ?");
        $stmt->bind_param("ssssi", $trainerName, $spec, $email, $phone, $trainerid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteTrainer($trainerid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM project.trainer WHERE TrainerID = ?");
        $stmt->bind_param("i", $trainerid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
