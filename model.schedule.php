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
        $stmt = $conn->prepare("INSERT INTO `Schedule` (`season_tourney`, `sport_id`, `start_date`, `end_date`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $schName, $schID, $schSDate, $schEDate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSchedule($schID, $schSDate, $schEDate, $schName, $schIDD) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Schedule` SET `sport_id` = ?, start_date = ?, end_date = ?, season_tourney = ? WHERE schedule_id = ?");
        $stmt->bind_param("isssi", $schID, $schSDate, $schEDate, $schName, $schIDD);
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
        $stmt = $conn->prepare("DELETE FROM `Schedule` WHERE schedule_id = ?)");
        $stmt->bind_param("i", $schIDD);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectSchIDForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT sport_id FROM `Sport` Order by sport_id");
       // $stmt->bind_param("i", $schIDD);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $return;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
