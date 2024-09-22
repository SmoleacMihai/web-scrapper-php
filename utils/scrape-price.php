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

    function scrapeScreenAndPrice($url, $price_selector, $screen_selector, $resolution_selector): array
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

        try {
            $resolution = $crawler->filter($resolution_selector)->text();
        } catch (Exception $e) {
            $resolution = "Resolution not found";
        }
        return [
            0 => $price,
            1 => $size,
            2 => $resolution
        ];
    }
?>