<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}
/**
 * This page will handle both create and edit
 */
$events = [];

$result = get_events();
// convert breed data to render_input's expected "options" data
$events = array_map(function ($v) {
    return ["label" => $v["artist"], "value" => $v["id"]];
}, $result);

$id = (int)se($_GET, "id", 0, false);
$event = [];

if (count($_POST) > 0) {
    $event = $_POST;
    $event_id = -1;
    if (validate_event($_POST)) {
        $event_id = save_data($_POST);
    }
    if ($event_id > 0) {
        flash("Successfully set profile for " . $event["artistName"], "success");
        redirect("admin/event_profile.php?id=$event_id");
    }
}

if ($id > 0) {
    echo "ID:", $id;
    $db = getDB();
    $query = "SELECT id, description, image, artist, venue, country, locality, time FROM Events WHERE id='$id'";
    $stmt = $db->prepare($query);
    try {
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result) {
            $event = $result;
            error_log("Event result: " . var_export($event, true));
        } else {
            flash("There was a problem finding this event", "danger");
        }
    } catch (PDOException $e) {
        error_log("Error fetching event by id: " . var_export($e, true));
        flash("An unhandled error occurred", "danger");
    }
}


?>
<div class="container-fluid">
    <h1>Event Profile</h1>
    <form method="POST">
        <?php render_input(["type" => "text", "id" => "artistName", "name" => "artistName", "label" => "Artist Name", "rules" => ["minlength" => 2, "required" => true], "value" => se($event, "artist", "", false)]); ?>
        <?php render_input(["type" => "text", "id" => "eventVenue", "name" => "eventVenue", "label" => "Event Venue", "rules" => ["required" => true], "value" => se($event, "venue", "", false)]); ?>
        <?php render_input(["type" => "text", "id" => "eventCountry", "name" => "eventCountry", "label" => "Event Country", "rules" => ["required" => true], "value" => se($event, "country", "", false)]); ?>
        <?php render_input(["type" => "text", "id" => "eventLocality", "name" => "eventLocality", "label" => "Event Locality", "rules" => ["required" => true], "value" => se($event, "locality", "", false)]); ?>
        <?php render_input(["type" => "text", "id" => "eventTime", "name" => "eventTime", "label" => "Event Time", "rules" => ["required" => true],"value" => se($event, "time", "", false)]); ?>
        <?php render_input(["type" => "text", "id" => "eventImage", "name" => "eventImage", "label" => "Event Image", "rules" => ["required" => true],"value" => se($event, "image", "", false)]); ?>
        <?php render_button(["text" => "Save", "type" => "submit"]); ?>
    </form>
</div>

<style>
    .selected {
        border: 3px solid black;
    }
</style>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>