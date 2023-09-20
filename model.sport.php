<?php
function selectSport() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT sport_id, sport_name, average_playtime FROM `Sport`");
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
