<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true); //login guard 
$user_id = get_user_id();

$attending = search_attending($user_id);

$events = get_attending($attending);

?>
<div class="container-fluid">
    <h4>My Events</h4>
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <?php foreach ($events as $event) : ?>
                <div class="col">
                    <?php render_event_list_item($event); ?>
                </div>
            <?php endforeach; ?>
            <?php if (count($events) === 0) : ?>
                <div class="col-12">
                    You do not have any upcoming events that you are attending
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
require_once(__DIR__ . "/../../partials/footer.php");
?>