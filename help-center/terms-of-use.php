<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/footer.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/helpcenteritem.php");

$props_nav = [
    "title" => "Terms of Use - Fraud PHP"
];
$props_item = [
    "id" => "terms-of-use",
    "title" => "Terms of Use",
];
?>

<?= Navbar($props_nav) ?>
<?= HelpCenterItem($props_item) ?>
<?= Footer() ?>