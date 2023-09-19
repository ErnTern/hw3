<?php
function selectAthlete() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT athlete_id, athlete_name, athlete_age FROM `Athlete`");
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
