<?php
// Set Page Metadata
$PAGE_TITLE = "Test Us - Fraud PHP";
$PAGE_DESCRIPTION = "Contact Us Description";
$PAGE_KEYWORDS = "Contact Us Keywords";

require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/Navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/Footer.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/HelpCenterItem/HelpItem.php");

function HelpCenterPage()
{
    $Navbar = Navbar();
    $Footer = Footer();
    $props = [
        "FraudFor" => "HelpItem",
        "id" => "contact-us",
        "title" => "Contact Us",
        "description" => "This is the contact us page"
    ];
    $HelpItem = HelpItem($props);
    return <<<HTML
    {$Navbar}
    {$HelpItem}
    {$Footer}
HTML;
}

$result = [
    "content" => HelpCenterPage(),
    "title" => "Contact Us - Fraud PHP",
    "description" => "Custom Page Description",
    "keywords" => "Custom Page Keywords"
];

echo json_encode($result);
