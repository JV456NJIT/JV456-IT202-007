<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

function process_events($result){
    $status = se($result, "status", 400, false);
    if ($status != 200) {
        return;
    }
    error_log("Response: " . var_export($result, true));
    if (se($result, "status", 400, false) == 200 && isset($result["response"])) {
        $result = json_decode($result["response"], true);
    } else {
        $result = [];
    }
    $db = getDB();
    $i = 0;
    foreach ($result as $element){
        if (!is_array($element)){
            continue;
        }
        foreach ($element as $event){
            $imageData = $event["image"];
            $artistData = $event["name"];
            $venueData = $event["location"]["name"];
            $countryData = $event["location"]["address"]["addressCountry"];
            $localityData = $event["location"]["address"]["addressLocality"];
            $timeData = $event["startDate"];
            $timeDataDescription = date('D-M-d-Y h:i', strtotime($timeData));
            $descriptionData = $artistData . " at the " . $venueData . " on " . $timeDataDescription;
            $timeData = date('Y-m-d H:i:s', strtotime($timeData));
            $api_idData = $artistData . "P:" . $result["page"] . "E:" .$i;
            $descriptionData = $artistData . " at the " . $venueData . " on " . $timeData;
            date_default_timezone_set('America/New_York');
            $created = date('Y-m-d H:i:s', time());
            $query = "INSERT INTO Events (api_id, description, image, artist , venue, country, locality, time, created) VALUES(:api_id, :description, :image, :artist, :venue, :country, :locality, :time, :created) ON DUPLICATE KEY UPDATE api_id=api_id";
            $stmt = $db->prepare($query);
            $stmt->bindValue(':api_id',$api_idData,PDO::PARAM_STR);
            $stmt->bindValue(':description',$descriptionData,PDO::PARAM_STR);
            $stmt->bindValue(':image',$imageData,PDO::PARAM_STR);
            $stmt->bindValue(':artist',$artistData,PDO::PARAM_STR);
            $stmt->bindValue(':venue',$venueData,PDO::PARAM_STR);
            $stmt->bindValue(':country',$countryData,PDO::PARAM_STR);
            $stmt->bindValue(':locality',$localityData,PDO::PARAM_STR);
            $stmt->bindValue(':time',$timeData,PDO::PARAM_STR);
            $stmt->bindValue(':created',$created,PDO::PARAM_STR);
            $stmt->execute();
            $i++;
        }
    }
}
?>

<div class="container-fluid">
    <h1>Artist Event Uploader</h1>
    <div class="container-fluid">
        <form  method="POST">
            <?php render_input(["type" => "text", "id" => "artistName", "name" => "artistName", "label" => "Artist Name", "rules" => ["required" => true]]); ?>
            <?php render_input(["type" => "number", "id" => "pageOption", "name" => "pageOption", "label" => "Page Option", "rules" => ["required" => true]]); ?>
            <?php render_button(["text" => "Load Artist Events", "type" => "submit"]); ?>
        </form>
    </div>
</div>

<?php if (isset($_POST['artistName'])) : ?>
    <?php
        $result = get("https://concerts-artists-events-tracker.p.rapidapi.com/artist", "EVENT_API_KEY", ["name" => $_POST['artistName'], "page" => $_POST['pageOption']], true, "concerts-artists-events-tracker.p.rapidapi.com");
        process_events($result);
    ?>
<?php endif ?>