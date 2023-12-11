<?php
function save_data($data, $ignore = ["submit"]){
    $db = getDB();
    $imageData = $data["eventImage"];
    $artistData = $data["artistName"];
    $locationData = $data["eventLocation"];
    $timeData = $data["eventTime"];
    $timeDataDescription = date('D-M-d-Y h:i', strtotime($timeData));
    $descriptionData = $artistData . " at the " . $locationData . " on " . $timeDataDescription;
    $timeData = date('Y-m-d H:i:s', strtotime($timeData));
    $api_idData = $artistData . ":MANUAL";
    echo $descriptionData,"<br>",$artistData, "<br>", " at the ", $locationData, "<br>" ," on ", $timeDataDescription;
    $query = "INSERT INTO Events (api_id, description, image, artist , location, time) VALUES(:api_id, :description, :image, :artist, :location, :time) ON DUPLICATE KEY UPDATE api_id=api_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':api_id',$api_idData,PDO::PARAM_STR);
    $stmt->bindValue(':description',$descriptionData,PDO::PARAM_STR);
    $stmt->bindValue(':image',$imageData,PDO::PARAM_STR);
    $stmt->bindValue(':artist',$artistData,PDO::PARAM_STR);
    $stmt->bindValue(':location',$locationData,PDO::PARAM_STR);
    $stmt->bindValue(':time',$timeData,PDO::PARAM_STR);
    try {
        $stmt->execute();
        return $db->lastInsertId();
    } catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("An error occurred saving data for table", "danger");
        return -1;
    }
}