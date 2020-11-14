<?php
    require ("includes/header.php");
    $vendorDirPath = realpath(__DIR__ . '/vendor');
    echo $vendorDirPath;
    echo file_exists($vendorDirPath . '/autoload.php');
?>

















<?php
    require ("includes/footer.php");
?>