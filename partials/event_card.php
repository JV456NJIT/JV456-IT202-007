<?php if (isset($data)) : error_log("cat data: " . var_export($data, true)); ?>
    <div class="card" style="width:15em">
        <?php /* handle image*/
        $urls = isset($data["image"]) ? $data["image"] : "";
        error_log("urls data: " . var_export($urls, true));
        $urls = explode(",", $urls);
        error_log("urls data after explode:" . var_export($urls, true));
        ?>
        <img class="p-3" style="width: 100%; aspect-ratio: 1; object-fit: scale-down; max-height: 256px;" src="<?php se($urls, 0, get_url("images/default.png")); ?>" />
        <div class="card-body">
            <h4 class="card-title"><?php se($data, "artist"); ?></h4>
            <h5 class="card-subtitle"><?php se($data, "venue", "Venue"); ?></h5>
            <h6 class="card-subtitle"><?php se($data, "country", "Country"); ?></h6>
            <p class="card-text"><?php se($data, "locality"); ?></p>
        </div>
        <div class="card-footer">
            <?php $id = se($data, "id", -1, false);
            ?>
            <div class="row mt-1 g-1">
                <?php $url = get_url("event_profile.php?id=$id", true); ?>
                <a class="btn btn-primary col me-1" href="<?php se($url, true); ?>">Event Details</a>
                <?php $url = get_url("attending.php?id=$id", true); ?>
                <a class="btn btn-primary col me-1" href="<?php se($url, true); ?>">Add to Attending</a>
            </div>
            <?php if (has_role("Admin")) : ?>
                <div class="row mt-1 g-1">
                    <?php $url = get_url("admin/event_profile.php?id=$id", true); ?>
                    <a class="btn btn-secondary col me-1" href="<?php se($url, true); ?>">Edit</a>
                    <?php $url = get_url("admin/disable_event.php?id=$id", true); ?>
                    <a class="btn btn-danger col" href="<?php se($url, true); ?>">Delete</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<br>
<?php endif; ?>