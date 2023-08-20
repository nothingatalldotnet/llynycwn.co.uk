<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Llyn Y Cwn</title>
        <style>
            body, html {
                height: 100%;
                background: #000;
            }
        </style>
        <script src="https://unpkg.com/powerglitch@2.3.2/dist/powerglitch.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <img class='glitch' src='test.jpg' />
            <div class="main">
            
            </div>
        <script>
            PowerGlitch.glitch(
                '.glitch',
                {
                "playMode": "always",
                "createContainers": true,
                "hideOverflow": false,
                "timing": {
                    "duration": 3950
                },
                "glitchTimeSpan": {
                    "start": 0.09,
                    "end": 0.23
                },
                "shake": {
                    "velocity": 15,
                    "amplitudeX": 0.2,
                    "amplitudeY": 0.2
                },
                "slice": {
                    "count": 1,
                    "velocity": 60,
                    "minHeight": 0.02,
                    "maxHeight": 0.01,
                    "hueRotate": true
                },
                "pulse": false
                }
            )
        </script>
    </body>
</html>