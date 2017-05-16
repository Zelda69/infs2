<?php

/**
 * Created by @author Zbyněk Mlčák
 * Date: 16.05.2017
 */
class PagesController {
    public function home() {
        $first_name = 'Jon';
        $last_name = 'Snow';
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
}