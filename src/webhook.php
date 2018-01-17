<?php

$filename = sprintf("../tmp/%s", date("U"));

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
    file_get_contents('php://input')
);