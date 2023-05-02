<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/Navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/Footer.php");
function CustomPage()
{
    $Navbar = Navbar();
    $Footer = Footer();
    return <<<HTML
    {$Navbar}
    <section id="custom-page" class="page-content">
        <div class="content white-text">
            <h1 class="header-title">Custom Page</h1>
            <p class="header-sub-text">You can change the page title, description and keywords on each page. You must require the navbar and footer components on each page.</p>
            <a data-type="fraud-link" href="/" class="no-decoration btn white-text secondary-btn m-t-10">Return home</a>
        </div>
    </section>
    {$Footer}
HTML;
}

$result = [
    "content" => CustomPage(),
    "title" => "Custom Page - Fraud PHP",
    "description" => "Custom Page Description",
    "keywords" => "Custom Page Keywords"
];

echo json_encode($result);
