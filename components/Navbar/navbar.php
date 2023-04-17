<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/defaults.php");
function Navbar($props = [])
{
    $PAGE_TITLE = $props["title"] ?? DEFAULT_TITLE;
    $PAGE_DESCRIPTION = $props["description"] ?? DEFAULT_DESCRIPTION;
    $PAGE_KEYWORDS = $props["keywords"] ?? DEFAULT_KEYWORDS;
    $PAGE_AUTHOR = $props["author"] ?? DEFAULT_AUTHOR;
    $PAGE_FAVICON = $props["favicon"] ?? DEFAULT_FAVICON;

    return <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{$PAGE_DESCRIPTION}">
        <meta name="keywords" content="{$PAGE_KEYWORDS}">
        <meta name="author" content="{$PAGE_AUTHOR}">
        <link rel="stylesheet" href="/src/css/main.css">
        <link rel="stylesheet" href="/src/css/utils.css">
        <link rel="shortcut icon" href="{$PAGE_FAVICON}" type="image/x-icon">
        <script src="/src/js/plugins/jquery.js"></script>
        <title>{$PAGE_TITLE}</title>
    </head>
<body>
    <nav data-type="fraud-component" class="navbar flex-display justify-space-around align-center">
        <div class="navbar-item flex-display gap-5 align-center">
            <img class="navbar-svg large-svg no-drag" src="/src/imgs/static/content/favicon.svg" alt="">
            <h2 class="navbar-logo flex-display gap-5">Fraud <div class="blue-text bold-text">PHP</div>
            </h2>
        </div>
        <div class="navbar-item">
            <ul class="no-list-style flex-display justify-space-around align-center">
                <img class="navbar-svg small-svg" src="/src/imgs/static/content/linksvg.svg" alt="">
                <li><a class="no-decoration navbar-btn" href="/">Home</a></li>
                <li><a class="no-decoration navbar-btn" href="/custom-page">Custom Page</a></li>
                <li><a class="no-decoration navbar-btn" href="/feedbacks">Not Found Page</a></li>
            </ul>
        </div>
        <div class="navbar-item">
            <ul class="no-list-style flex-display justify-space-around align-center">
                <img class="navbar-svg small-svg" src="/src/imgs/static/content/githubsvg.svg" alt="">
                <li><a class="no-decoration navbar-btn" target="_blank" href="https://github.com/sscorpi/fraud-php">Source Code</a></li>
                <li><a class="no-decoration navbar-btn" target="_blank" href="https://github.com/sscorpi/fraud-php">Documentation</a></li>
            </ul>
        </div>
    </nav>
HTML;
}
