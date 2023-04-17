<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/footer.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/helpcenteritem.php");

$props_nav = [
    "title" => "Privacy - Fraud PHP"
];
$props_item = [
    "id" => "privacy-policy",
    "title" => "Privacy Policy",
];
?>

<?= Navbar($props_nav) ?>
<?= HelpCenterItem($props_item) ?>
<?= Footer() ?>