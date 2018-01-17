<?php

$filename = sprintf("%s", date("U"));

file_put_contents(
    $filename."_request.log",
    var_export($_REQUEST, true)
);

file_put_contents(
    $filename."_server.log",
    var_export($_SERVER, true)
);
