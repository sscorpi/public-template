<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/footer.php");
$props = [
    "title" => "Custom Page Title - Fraud PHP",
    "description" => "You can change the page title, description and keywords on each page. You must require the navbar and footer components on each page.",
    "keywords" => "custom, page, keywords"
];
?>
<?= Navbar($props) ?>
<section id="custom-page" class="page-content">
    <div class="content white-text">
        <h1 class="header-title">Custom Page</h1>
        <p class="header-sub-text">You can change the page title, description and keywords on each page. You must require the navbar and footer components on each page.</p>
        <a href="/" class="no-decoration btn white-text secondary-btn m-t-10">Return home</a>
    </div>
</section>
<?= Footer() ?>