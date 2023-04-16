<?php
$PAGE_TITLE = "Privacy Policy - Fraud PHP";
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/helpcenteritem.php");
$props = [
    "id" => "privacy-policy",
    "title" => "Privacy Policy",
];
?>

<?= HelpCenterItem($props) ?>
<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/footer.php"); ?>