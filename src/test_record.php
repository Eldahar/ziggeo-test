<?php
 require_once "../vendor/autoload.php";

$ziggeo = new Ziggeo(
    'dc39fca5434c0532bee964012181ca04',
    '944e4e74eceeb43cd46ef15ace3f5134',
    '802376861b2dced1401381bf77864346'
);
$token = $ziggeo->authtokens()->create(
    [
        "grants" => [
            "create" => [
                "session_owned" => true
            ]
        ]
    ]
);

?>
<html>
<head>
    <link rel="stylesheet" href="https://assets-cdn.ziggeo.com/v2-stable/ziggeo.css" />
    <script src="https://assets-cdn.ziggeo.com/v2-stable/ziggeo.js"></script>
    <script>var app = new ZiggeoApi.V2.Application({
            token:"dc39fca5434c0532bee964012181ca04",
            webrtc_streaming: true,
            auth: true
        });
    </script>
</head>
<body>




<ziggeorecorder ziggeo-width=320 ziggeo-height=240 ziggeo-theme="modern" ziggeo-themecolor="red"> </ziggeorecorder>


</body>
</html>
