<?php 
    $app = \App\Library\App::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHPMemcachedAdmin<?= APP_VERSION !== '%%VERSION%%' ? ' '. APP_VERSION : '' ?></title>
    <link rel="stylesheet" type="text/css" href="<?= $app->rootPath() ?>/assets/style.css?mtime=<?= filemtime(__DIR__ .'/../public/assets/style.css') ?>">
    <script>
        const basePath = '<?= $app->rootPath() ?>';
    </script>
    <script src="<?= $app->rootPath() ?>/assets/highcharts-5.0.9.js"></script>
    <script type="module" src="<?= $app->rootPath() ?>/assets/script.js?mtime=<?= filemtime(__DIR__ .'/../public/assets/script.js') ?>"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= $app->rootPath() ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $app->rootPath() ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $app->rootPath() ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= $app->rootPath() ?>/site.webmanifest">
</head>
<body>
<div style="margin:0 auto; width:1000px; clear:both;">
    <div style="font-weight:bold;font-size:1.2em;"><a href="<?= $app->rootPath() ?>/" style="color: #000;">PHPMemcachedAdmin<?= APP_VERSION !== '%%VERSION%%' ? ' <sup>'. APP_VERSION .'</sup>' : '' ?></a></div>

    <div class="header corner full-size padding" style="margin-top:5px;">
        <a href="<?= $app->rootPath() ?>/">See Stats</a> | <a href="<?= $app->rootPath() ?>/stats">See Live Stats</a> | <a href="<?= $app->rootPath() ?>/commands">Execute Commands</a> | <a href="<?= $app->rootPath() ?>/data">Show data</a>
    </div>
