<?php
$PAGE_TITLE = "Contact Us - Fraud PHP";
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/helpcenteritem.php");
$props = [
    "id" => "contact-us",
    "title" => "Contact Us",
];
?>

<?= HelpCenterItem($props) ?>

<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/footer.php"); ?>