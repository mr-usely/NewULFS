<?php
require_once("../../../../Initialization/initialize.php");

if (!$session->is_logged_in()) {redirect_to("../index.html"); };

$found_user = Personnel::find_by_userid($session->UserID);
?>

<!--=== Header ===-->
<?php include_once 'base/header.php'; ?>

<!--=== Side Bar ===-->
<?php include_once 'base/sidebar.php'; ?>

<!--=== Navigation Bar ===-->
<?php include_once 'base/navbar.php'; ?>
    
<!--=== Page Content ===-->
<?php

    switch (true) {
        case ($menu == "dashboard"):
        case null:
            include_once 'pages/dashboard.php';
            break;
        case ($menu == "management_report"):
            include_once 'pages/management_report.php';
            break;
        case ($menu == "test"):
            include_once 'pages/test.php';
            break;
        default:
            echo "Page Not Found";
            break;
    }

?>			

<!--=== Footer ===-->
<?php include_once 'base/footer.php'; ?>