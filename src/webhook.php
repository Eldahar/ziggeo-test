<?php

$json = file_get_contents('php://input');
$data = json_decode($json);
$eventType = $data->event_type;
$eventKind = $data->event_kind;

$filename = sprintf("../tmp/%s_%s_%s", date("U"), $eventType, $eventKind);

file_put_contents(
    $filename."_request.log",
    var_export($_REQUEST, true)
);

file_put_contents(
    $filename."_server.log",
    var_export($_SERVER, true)
);

file_put_contents(
    $filename."_input.log",
    $json
);