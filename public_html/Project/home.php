<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<div class="container-fluid">
    <div class="h-30 p-5 text-bg-transparent rounded-3 border">
        <h1>Welcome to the Upcoming Artist Event Finder</h1>
        <p>This tool allows you to search for upcoming events for a specific artist by country.</p>
        <p>This tool boasts a large selection of artists to choose from and provides you with all the details regading a specific event to make sure that you're concert ready!</p>
        <p>Visit our brose section to start searching for your favorite artists upcoming events near you.</p>
        <?php $url = get_url("browse.php", true); ?>
        <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php se($url, true);; ?>" role="button">Look up artist</a></p>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>