<!DOCTYPE html>
<html>
<head>
    <title>Webhook Live Monitor</title>
    <meta http-equiv="refresh" content="2">
    <style>
        body {
            background: #0b0f14;
            color: #00ff9c;
            font-family: monospace;
            padding: 20px;
        }
        .header {
            color: #ffffff;
            margin-bottom: 10px;
        }
        .log {
            background: #000;
            padding: 15px;
            height: 400px;
            overflow-y: auto;
            border: 1px solid #333;
        }
        .muted {
            color: #777;
        }
    </style>
</head>
<body>

<div class="header">
    ▶ Webhook Server: <b>RUNNING</b><br>
    ▶ Browser Time: <?= date('H:i:s') ?>
</div>

<div class="log">
<?php
$logFile = __DIR__ . '/runtime.log';

if (!file_exists($logFile) || filesize($logFile) === 0) {
    echo "<span class='muted'>No requests received yet...</span>";
} else {
    echo nl2br(htmlspecialchars(file_get_contents($logFile)));
}
?>
</div>

</body>
</html>
