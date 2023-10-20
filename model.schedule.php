<?php
function selectSchedule() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT season_tourney, schedule_id, sport_id, start_date, end_date FROM `Schedule`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSchedule($schName, $schID, $schSDate, $schEDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Schedule` (`schedule_id`, `sport_id`, `start_date`, `end_date`, `season_tourney`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $schName, $schID, $schSDate, $schEDate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSchedule($schName, $schID, $schSDate, $schEDate, $schIDD) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Schedule` set `season_tourney` = ? `sport_id` = ? `start_date` = ? `end_date` = ? where schedule_id = ?)");
        $stmt->bind_param("sissi", $schName, $schID, $schSDate, $schEDate, $schIDD);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSchedule($schIDD) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `Schedule` where = ?)");
        $stmt->bind_param("i", $schIDD);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
