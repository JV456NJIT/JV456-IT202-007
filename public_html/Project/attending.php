<?php
// this file is part of an example of how we can persist query params
//note we need to go up 1 more directory
require(__DIR__ . "/../../lib/functions.php");
// don't forget to start the session if you need it since this is done in nav.php and not functions.php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

$id = (int)se($_GET, "id", 0, false);
if ($id <= 0) {
    flash("Invalid event", "danger");
} else {
    $user_id = get_user_id();
    $event_id = $id;
    $db = getDB();
    $query = "INSERT INTO Attending (user_id, event_id) VALUES(:user_id, :event_id) ON DUPLICATE KEY UPDATE user_id=user_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':user_id',$user_id,PDO::PARAM_STR);
    $stmt->bindValue(':event_id',$event_id,PDO::PARAM_STR);
    try {
        $stmt->execute();
        flash("Successfully added event to your attending events", "success");
    } catch (PDOException $e) {
        flash("Error adding event to your attending events", "danger");
        error_log("Error deleting event: " . var_export($e, true));
    }
}

if (isset($_SESSION["previous"]) !== false) {
    $url = "browse.php";
} else {
    $url = "home.php";
}
$url .= "?" . http_build_query($_GET);
error_log("redirecting to " . var_export($url, true));
redirect(get_url($url));