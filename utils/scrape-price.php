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
?>