<?php
function Navbar($props = [])
{
    return <<<HTML
    <nav data-type="fraud-component" class="navbar flex-display justify-space-around align-center">
        <div class="navbar-item flex-display gap-5 align-center">
            <img class="navbar-svg large-svg no-drag" src="/src/imgs/static/content/favicon.svg" alt="">
            <h2 class="navbar-logo">Fraud<span class="blue-text bold-text">PHP</span>
            </h2>
        </div>
        <div class="navbar-item">
            <ul class="no-list-style flex-display justify-space-around align-center">
                <img class="navbar-svg small-svg" src="/src/imgs/static/content/linksvg.svg" alt="">
                <li><a data-type = "fraud-link" class="no-decoration navbar-btn" href="/">Home</a></li>
                <li><a data-type = "fraud-link" class="no-decoration navbar-btn" href="/custom-page">Custom Page</a></li>
                <li><a data-type = "fraud-link" class="no-decoration navbar-btn" href="/feedbacks">Not Found Page</a></li>
            </ul>
        </div>
        <div class="navbar-item">
            <ul class="no-list-style flex-display justify-space-around align-center">
                <img class="navbar-svg small-svg" src="/src/imgs/static/content/githubsvg.svg" alt="">
                <li><a class="no-decoration navbar-btn" target="_blank" href="https://github.com/sscorpi/fraud-php">Source Code</a></li>
                <li><a class="no-decoration navbar-btn" target="_blank" href="https://www.fraudphp.me">Documentation</a></li>
            </ul>
        </div>
    </nav>
HTML;
}
