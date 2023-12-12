<?php
function save_data($data, $ignore = ["submit"]){
    $db = getDB();
    $imageData = $data["eventImage"];
    $artistData = $data["artistName"];
    $venueData = $data["eventVenue"];
    $countryData = $data["eventCountry"];
    $localityData = $data["eventLocality"];
    $timeData = $data["eventTime"];
    $timeDataDescription = date('D-M-d-Y h:i', strtotime($timeData));
    $descriptionData = $artistData . " at the " . $venueData . " on " . $timeDataDescription;
    $timeData = date('Y-m-d H:i:s', strtotime($timeData));
    $api_idData = $artistData . ":MANUAL";
    $time = time();
    $modified = date('Y-m-d H:i:s', $time);
    $query = "INSERT INTO Events (api_id, description, image, artist , venue, country, locality, time, modified) VALUES(:api_id, :description, :image, :artist, :venue, :country, :locality, :time, :modified) ON DUPLICATE KEY UPDATE api_id=api_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':api_id',$api_idData,PDO::PARAM_STR);
    $stmt->bindValue(':description',$descriptionData,PDO::PARAM_STR);
    $stmt->bindValue(':image',$imageData,PDO::PARAM_STR);
    $stmt->bindValue(':artist',$artistData,PDO::PARAM_STR);
    $stmt->bindValue(':venue',$venueData,PDO::PARAM_STR);
    $stmt->bindValue(':country',$countryData,PDO::PARAM_STR);
    $stmt->bindValue(':locality',$localityData,PDO::PARAM_STR);
    $stmt->bindValue(':time',$timeData,PDO::PARAM_STR);
    $stmt->bindValue(':modified',$modified,PDO::PARAM_STR);
    try {
        $stmt->execute();
        return $db->lastInsertId();
    } catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("An error occurred saving data for table", "danger");
        return -1;
    }
}