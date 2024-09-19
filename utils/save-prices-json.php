<?php
    function savePricesToJson($prices, $fileName = 'prices.json') {
        $jsonData = json_encode($prices, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        file_put_contents($fileName, $jsonData);
    }
?>