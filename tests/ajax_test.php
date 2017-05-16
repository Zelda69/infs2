<?php
/**
 * Created by PhpStorm.
 * User: @author HP
 * Date: 15.05.2017
 * Time: 22:01
 */

if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
        if($_POST['id'] == 5) echo "Hoovnooo!";
        else echo "Je to tam!";
    }
}