<?php
    function saveArrayToJson($prices, $fileName = 'galaxy_a51_prices.json') {
        $jsonData = json_encode($prices, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        file_put_contents($fileName, $jsonData);
    }
?>