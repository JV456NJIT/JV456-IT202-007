<?php
function map_data($api_data){
    $records = [];
    foreach ($api_data as $element){
        foreach ($element as $event){
            $record["description"] = $event["description"];
            $record["image"] = $event["image"];
            $record["artist"] = $event["name"];
            $record["location"] = $event["location"]["name"];
            $record["time"] = $event["startDate"];
            array_push($records, $record);
        }
    }
    return $records;
}