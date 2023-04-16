<?php
$PAGE_TITLE = "Terms of Use - Fraud PHP";
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/helpcenteritem.php");
$props = [
    "id" => "terms-of-use",
    "title" => "Terms of Use",
];
?>

<?= HelpCenterItem($props) ?>
<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/footer.php"); ?>