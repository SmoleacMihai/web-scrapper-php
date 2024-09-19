<?php
    function print_row($siteName, $price, $url) {
        return '<tr><td>' . $siteName . '</td><td><a target="_blank" href="'.$url.'">' . $price. '</a></td></tr>';
    }
?>