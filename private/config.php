<?php 
    /**
     * Filename: config.php
     * Description: this file will be responsible to dynamically response to other webpage requests, and
     * generate correct title, description for each requested webpage. 
     */

    // THIS_PAGE is a file path
    define ('THIS_PAGE', $_SERVER['PHP_SELF']);
    define('FILE_NAME', basename(THIS_PAGE));
    
    // helps prevent date errors
    date_default_timezone_set('America/Los_Angeles');

    // get keys from the confidential file
    include "confidential.php";

    // initilize frequently use variables
    $parentDir = dirname(THIS_PAGE, 1);
    $title = "";
    $formCSS = "";
    $meta_keyword = "";
    $meta_description = "";

    switch(FILE_NAME){
        case 'index.php':
            $title = "Dai Nguyen | Personal Website / Resume";
        break;

        case 'login.php':
            
        break;
    };
?>