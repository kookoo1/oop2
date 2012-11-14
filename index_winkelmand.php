<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
// require the needed objects
require_once 'includes/DB.php';
require_once 'includes/Winkelmand.php';
?>
<!doctype html>
<html>
    <head>
        <title>
            GSM Shop
        </title>
    </head>
    <body>
        <?php
        echo "<ol>";
        for ($row = 0; $row < 3; $row++) {
            echo "<li><b>The row number $row</b>";
            echo "<ul>";

            foreach ($shopGsm[$row] as $key => $value) {
                echo "<li>" . $value . "</li>";
            }

            echo "</ul>";
            echo "</li>";
        }
        echo "</ol>";
        ?>


    </body>
</html>
