<?php /* Note this file is different than admin/cat_profile.php*/ ?>
<?php
require(__DIR__ . "/../../partials/nav.php");

$id = (int)se($_GET, "id", -1, false);

if ($id <= 0) {
    flash("Invalid event profile", "danger");
    $url = "browse.php?" . http_build_query($_GET);
    error_log("redirecting to " . var_export($url, true));
    redirect(get_url($url));
}

if ($id > 0) {
    $db = getDB();
    $query = "SELECT id, description, image, artist, venue, country, locality, time FROM Events WHERE id='$id'";
    $stmt = $db->prepare($query);
    //$stmt->bindValue(':id',$id,PDO::PARAM_INT);
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

    <h1>Hello!</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5 class="card-title"><?php se($event, "artist"); ?> at the <?php se($event, "venue"); ?> on <?php se($event, "time"); ?> </h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <?php /* handle image*/
                        $urls = isset($event["image"]) ? $event["image"] : "";
                        error_log("urls data: " . var_export($urls, true));
                        $urls = explode(",", $urls);
                        error_log("urls data after explode:" . var_export($urls, true));
                        ?>
                        <?php foreach ($urls as $url) : ?>
                            <div class="col">
                                <img class="p-3" style="width: 100%; aspect-ratio: 1; object-fit: scale-down; max-height: 256px;" src="<?php se($url, null, get_url("images/black_cat_vector_svg.jpg")); ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Event Info</h5>
                    <div><strong>Artist: </strong><?php se($event, "artist"); ?></div>
                    <div><strong>Venue: </strong><?php se($event, "venue", "-"); ?></div>
                    <div><strong>Country: </strong><?php se($event, "country", "-"); ?></div>
                    <div><strong>Locality: </strong><?php se($event, "locality", "-"); ?></div>
                    <div><strong>Time: </strong> <?php  
                    $time = se($event, "time", "-", false);
                    $time  = date('D-M-d-Y h:i', strtotime($time) ); 
                    echo $time;
                    ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once(__DIR__ . "/../../partials/footer.php");
    ?>