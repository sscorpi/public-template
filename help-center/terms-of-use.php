<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/Navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/Footer.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/HelpItem.php");

$props_nav = [
    "title" => "Terms of Use - Fraud PHP"
];
$props_item = [
    "id" => "terms-of-use",
    "title" => "Terms of Use",
];
?>

<?= Navbar($props_nav) ?>
<?= HelpItem($props_item) ?>
<?= Footer() ?>