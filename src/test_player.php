<?php

require_once "../vendor/autoload.php";

$videoToken = "ae8d7a5b95c8a8b5d5958f599dea4d14";

$ziggeo = new Ziggeo(
    'dc39fca5434c0532bee964012181ca04',
    '944e4e74eceeb43cd46ef15ace3f5134',
    '802376861b2dced1401381bf77864346'
);
$token = $ziggeo->auth()->generate(
    [
        "grants" => [
            "read" => [
                "session_owned" => true
            ]
        ],
        "expiration_date" => date("U")+100,
        "volatile" => true
    ]
);

?>
<html>
<head>
    <link rel="stylesheet" href="https://assets-cdn.ziggeo.com/v2-stable/ziggeo.css" />
    <script src="https://assets-cdn.ziggeo.com/v2-stable/ziggeo.js"></script>
    <script>var app = new ZiggeoApi.V2.Application({
            token: "dc39fca5434c0532bee964012181ca04",
            webrtc_streaming: true,
            auth: true,
            "client-auth": "<?php echo $token ?>"
        });
    </script>
</head>
<body>

<div id="replace_me-v2_player"></div>
<script>
//    ZiggeoApi.Events.on("system_ready", function() {
        var player = new ZiggeoApi.V2.Player({
            element: document.getElementById("replace_me-v2_player"),
            attrs: {
                width: 320,
                height: 180,
                theme: "modern",
                themecolor: "red",
                video: "<?php echo $videoToken; ?>"
            }
        });

        player.activate();
//    });
</script>
</body>
</html>