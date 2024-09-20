<?php
    require_once 'vendor/autoload.php';
    use Goutte\Client;

    function scrapePrice($url, $selector) {
        $client = new Client();
        $crawler = $client->request('GET', $url);

        try {
            $price = $crawler->filter($selector)->text();
        } catch (Exception $e) {
            $price = "Price not found";
        }
        return $price;
    }

    function scrapeScreenAndPrice($url, $price_selector, $screen_selector): array
    {
        $client = new Client();
        $crawler = $client->request('GET', $url);

        try {
            $price = $crawler->filter($price_selector)->text();
        } catch (Exception $e) {
            $price = "Price not found";
        }
        try {
            $size = $crawler->filter($screen_selector)->text();
        } catch (Exception $e) {
            $size = "Size not found";
        }
        return [
            0 => $price,
            1 => $size,
        ];
    }
?>