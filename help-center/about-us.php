<?php
$PAGE_TITLE = "About Us - Fraud PHP";
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/helpcenteritem.php");
$props = [
    "id" => "about-us",
    "title" => "About Us",
];
?>

<?= HelpCenterItem($props) ?>

<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/footer.php"); ?>