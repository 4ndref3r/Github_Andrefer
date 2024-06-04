<?php
    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors',FALSE);
    ini_set('log_errors',TRUE);
    ini_set("error_log","./php-error-log");
    error_log("Inicio de aplicación web");
    require_once 'app/lib/database.php';
    require_once 'app/lib/controller.php';
    require_once 'app/lib/model.php';
    require_once 'app/lib/view.php';
    require_once "./app/helpers/sessionController.php";
    require_once 'app/helpers/errormessages.php';
    require_once 'app/helpers/successmessages.php';
    require_once "./app/lib/app.php";
    require_once 'app/config/config.php';
    $app = new App();