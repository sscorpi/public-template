<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/Navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/Footer.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/HelpItem.php");

$props_nav = [
    "title" => "Privacy Policy - Fraud PHP"
];
$props_item = [
    "id" => "privacy-policy",
    "title" => "Privacy Policy",
];
?>

<?= Navbar($props_nav) ?>
<?= HelpItem($props_item) ?>
<?= Footer() ?>