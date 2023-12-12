<?php

function render_input($data = array())
{
    include(__dir__ . "/../partials/input_field.php");
}

function render_button($data = array())
{
    include(__DIR__ . "/../partials/buttons.php");
}

function render_table($data = array())
{
    include(__DIR__ . "/../partials/table.php");
}

function render_event_list_item($data)
{
    include(__DIR__ . "/../partials/event_card.php");
}
