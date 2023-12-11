<?php

function get_events(){
    $db = getDB();
    $query = "SELECT id, api_id, description, image, artist, location, time FROM Events";
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

function validate_event($event){
    error_log("event: " . var_export($event, true));
    $name = se($event, "artistName", "", false);
    $has_error = false;
    // name rules
    if(empty($name)){
        flash("Artist name is required", "warning");
        $has_error = true;
    }
    if(strlen($name) < 2){
        flash("Artist name must be at least 2 characters", "warning");
        $has_error = false;
    }
    //breed_id
    $location = se($event, "eventLocation", "", false);
    if(empty($location)){
        flash("Event Location is required", "warning");
        $has_error = true;
    }
    //breed_extra is optional
    //sex
    $time = se($event, "eventTime", "", false);
    if(empty($time)){
        flash("Event Time is required", "warning");
        $has_error = true;
    }
    $time = se($event, "eventTime", "", false);
    if(empty($eventImage)){
        flash("Event image empty, assigning default image", "warning");
        $eventImage = "https://rapidapi-prod-apis.s3.amazonaws.com/484b9325-41cd-4310-b104-617f22f5d175.png";
    }
    return !$has_error;
}