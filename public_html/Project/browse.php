<?php
require(__DIR__ . "/../../partials/nav.php");

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
// remove single view filter
if (isset($_GET["id"])) {
    unset($_GET["id"]);
}
$events = search_events();

?>
<div class="container-fluid">
    <h4>Upcoming Events</h4>
    <div class="container mx-auto">
        <div>
            <?php include(__DIR__ . "/../../partials/search_form.php"); ?>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($events as $event) : ?>
                <div class="col">
                    <?php render_event_list_item($event); ?>
                </div>
            <?php endforeach; ?>
            <?php if (count($events) === 0) : ?>
                <div class="col-12">
                    No Upcoming Events For Search Criteria
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
require_once(__DIR__ . "/../../partials/footer.php");
?>