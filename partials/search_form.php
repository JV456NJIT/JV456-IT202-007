<?php

// make breed options
$result = get_events();

$limit = range(1,100);

// convert breed data to render_input's expected "options" data
$artist = array_map(function ($v) {
    return ["label" => $v["artist"], "value" => $v["artist"]];
}, $result);

$artist = (array_unique($artist, SORT_REGULAR ));

$country = array_map(function ($v) {
    return ["label" => $v["country"], "value" => $v["country"]];
}, $result);
array_push($country, "Any");
array_unshift($country, ["label" => "Any", "value" => ""]);
$country = (array_unique($country, SORT_REGULAR ));

$orders = ["ASC", "DESC"];
$orders = array_map(function ($v) {
    return ["label" => $v, "value" => strtolower($v)];
}, $orders);

?>
<form method="GET">
    <div class="row">
        <div class="col-auto">
            <?php render_input(["type" => "select", "id" => "artist", "name" => "artist", "label" => "Artist Name", "options" => $artist, "value" => se($search, "artist", "", false)]); ?>
        </div>
        <div class="col-auto">
            <?php render_input(["type" => "select", "id" => "country", "name" => "country", "label" => "Country", "options" => $country, "location" => se($search, "country", "", false)]); ?>
        </div>
        <div class="col-auto">
            <?php render_input(["type" => "select", "id" => "order", "name" => "order", "label" => "Order", "options" => $orders, "value" => se($search, "order", "", false)]); ?>
        </div>
        <div class="col-auto">
            <?php render_input(["type" => "select", "id" => "limit", "name" => "limit", "label" => "Limit", "options" => $limit, "value" => se($search, "limit", "", false)]); ?>
        </div>
        
    </div>
    <div class="row">
        <div class="col-1">
            <?php render_button(["type" => "submit", "text" => "Search"]); ?>
        </div>
        <div class="col-1">
            <a class="btn btn-secondary" href="?">Reset</a>
        </div>
    </div>
</form>