<?php
/**
 * Created by @author Zbyněk Mlčák
 * Date: 16.05.2017
 */

require_once('Db.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
} else {
    $controller = 'pages';
    $action     = 'home';
}

require_once('views/layout.php');
?>