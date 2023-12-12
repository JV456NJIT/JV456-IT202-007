<?php

$VALID_ORDER_COLUMNS = ["description", "artist", "venue","country","locality", "time"];

function get_events(){
    $db = getDB();
    $query = "SELECT id, api_id, description, image, artist, venue, country, locality, time FROM Events";
    $stmt = $db->prepare($query);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    } catch (PDOException $e) {
        error_log("Error fetching breeds from db: " . var_export($e, true));
    }
    return [];
}

function search_events(){
    // Initialize variables
    global $search; //make search available outside of this function
    $search = $_GET;
    if (count($_GET) > 0){
        $artist = $search["artist"];
        $country = $search["country"];
        $order = $search["order"];
        $limit = $search["limit"];
        $db = getDB();
        if ($country == ""){
            $query = "SELECT id, api_id, description, image, artist, venue, country, locality, time FROM Events
            WHERE artist='$artist' ORDER BY country $order, locality $order LIMIT $limit";
        }else{
            $query = "SELECT id, api_id, description, image, artist, venue, country, locality, time FROM Events
            WHERE artist='$artist' and country='$country' ORDER BY country $order, locality $order LIMIT $limit";
        }
        $stmt = $db->prepare($query);
        try {
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            error_log("Error fetching breeds from db: " . var_export($e, true));
        }
    }
    return [];
}


function validate_event($event){
    error_log("event: " . var_export($event, true));
    $name = se($event, "artistName", "", false);
    $has_error = false;
    if(empty($name)){
        flash("Artist name is required", "warning");
        $has_error = true;
    }
    if(strlen($name) < 2){
        flash("Artist name must be at least 2 characters", "warning");
        $has_error = false;
    }

    $venue = se($event, "eventVenue", "", false);
    if(empty($venue)){
        flash("Event Location is required", "warning");
        $has_error = true;
    }

    $country = se($event, "eventCountry", "", false);
    if(empty($country)){
        flash("Event Location is required", "warning");
        $has_error = true;
    }

    $locality = se($event, "eventLocality", "", false);
    if(empty($locality)){
        flash("Event Location is required", "warning");
        $has_error = true;
    }

    $time = se($event, "eventTime", "", false);
    if(empty($time)){
        flash("Event Time is required", "warning");
        $has_error = true;
    }

    $eventImage = se($event, "eventTime", "", false);
    if(empty($eventImage)){
        flash("Event image empty, assigning default image", "warning");
        $eventImage = "https://rapidapi-prod-apis.s3.amazonaws.com/484b9325-41cd-4310-b104-617f22f5d175.png";
    }
    return !$has_error;
}

function bind_params($stmt, $params)
{
    // Bind parameters to the SQL statement
    foreach ($params as $k => $v) {
        $type = PDO::PARAM_STR;
        if (is_null($v)) {
            $type = PDO::PARAM_NULL;
        } else if (is_numeric($v)) {
            $type = PDO::PARAM_INT;
        }
        $stmt->bindValue($k, $v, $type);
    }
}
