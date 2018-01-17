<?php
 require_once "../vendor/autoload.php";

$ziggeo = new Ziggeo(
    'dc39fca5434c0532bee964012181ca04',
    '944e4e74eceeb43cd46ef15ace3f5134',
    '802376861b2dced1401381bf77864346'
);
$token = $ziggeo->auth()->generate(
    [
        "grants" => [
            "create" => [
                "session_owned" => true
            ]
        ]
    ]
);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

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

<div id="replace_me-v2_recorder"></div>
<script>
    // ZiggeoApi.Events.on("system_ready", function() {
        var recorder = new ZiggeoApi.V2.Recorder({
            element: document.getElementById("replace_me-v2_recorder"),
            attrs: {
                width: 320,
                height: 240,
                theme: "modern",
                themecolor: "red",
                key: "<?php echo generateRandomString(10); ?>",
                picksnapshots: false
//                skipinitial: true,
//                skipinitialonrerecord: true,
//                primaryrecord: true,
//                timelimit: 10,
//                timeminlimit: 10,
//                autorecord: true,
//                countdown: 0,
//                rerecordable: false,
//                allowupload: false
            }
        });

        recorder.activate();
    // });
</script>

</body>
</html>
