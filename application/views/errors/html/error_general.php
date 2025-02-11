<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <link href="<?= CSS;?>/style.css" rel="stylesheet">
    <link href="<?= CSS;?>/mobile.css" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="middle-box text-center animated fadeInDown">
        <h1 style="font-size: 130px;">ERROR</h1>
        <h3 class="font-bold">Page Not Found</h3>

        <div class="error-desc">
            Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.
        </div>
        <div class="mt-3">
            <button type="button" onclick="location.href=`<?= BASE;?>`" class="btn btn-primary">Back to Home</button>
        </div>
    </div>
</body>
</html>

