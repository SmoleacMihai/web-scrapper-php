<?php
    function print_row($siteName, $price, $url): string
    {
        return '<tr><td>' . $siteName . '</td><td><a target="_blank" href="'.$url.'">' . $price. '</a></td></tr>';
    }

    function print_row_laptop($siteName, $price, $screen_size, $model_name, $url, $resolution): string
    {
        return '<tr><td>' . $siteName . '</td><td>'.$model_name.'</td><td>'.$screen_size.'</td><td>'.$resolution.'</td><td><a target="_blank" href="'.$url.'">' . $price. '</a></td></tr>';
    }
?>