<?php
require(__DIR__ . "/../../partials/nav.php");
$result = get("https://concerts-artists-events-tracker.p.rapidapi.com/artist", "EVENT_API_KEY", ["name" => "Bad Bunny", "page" => 1], true, "concerts-artists-events-tracker.p.rapidapi.com");
error_log("Response: " . var_export($result, true));
if (se($result, "status", 400, false) == 200 && isset($result["response"])) {
    $result = json_decode($result["response"], true);
} else {
    $result = [];
}
?>
<table>
<?php foreach ($result as $element) : ?>
    <?php foreach ($element as $event) : ?>
        <tr>
            <?php
                $description = $event["description"];
                $image = $event["image"];
                $artistName = $event["name"];
                $location = $event["location"]["name"];
                $time = $event["startDate"];
            ?>
            <td>
                <img src="<?php echo $image; ?>" width="100", height="100">
            </td>
            <td>
                <?php
                    echo $description,"<br>",$artistName, "<br>", " at the ", $location, "<br>" ," on ", date('D-M-d-Y h:i', strtotime($time));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
<?php endforeach; ?>
</table>