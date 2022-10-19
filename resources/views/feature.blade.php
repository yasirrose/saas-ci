<?php
    use YlsIdeas\FeatureFlags\Facades\Features;
   $x = Features::accessible('test-feature'); // returns true or false
    var_dump($x);
   ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Feature Flag</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
@feature('test-feature')
    <p> feature flag is turned on.</p>
@endfeature

@feature('test-feature', false)
    <p> feature flag is turned off.</p>
@endfeature
</body>
</html>