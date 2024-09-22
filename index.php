<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Galaxy A51 Prices (6gb / 128gb)</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
            th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
            .anti-scrapping {margin-top: 500px}
        </style>
    </head>
    <body>
    <div style="display: flex; flex-direction: row; justify-content: space-around">
        <div>
            <h1>Galaxy A51 Prices (6gb / 128gb)</h1>
            <table>
                <thead>
                <tr>
                    <th>Website</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    require_once 'utils/scrape-price.php';
                    require_once 'utils/print-row.php';
                    require_once 'utils/sites-config.php';
                    require_once 'utils/save-array-to-json.php';

                    foreach (returnSitesConfigGalaxyA51() as $site) {
                        $price = scrapePrice($site['url'], $site['selector']);

                        $prices_to_json[] = [
                            'name' => $site['name'],
                            'price' => $price,
                            'url' => $site['url']
                        ];

                        echo print_row($site['name'], $price, $site['url']);
                    }

                    saveArrayToJson($prices_to_json);
                ?>
                </tbody>
            </table>
        </div>
        <div>
            <h1>Lenovo laptops/tablets</h1>
            <table>
                <thead>
                <tr>
                    <th>Website</th>
                    <th>Model Name</th>
                    <th>Screen dimension</th>
                    <th>Resolution</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach (returnSitesConfigLenovoLaptops() as $site) {
                        $priceAndSize = scrapeScreenAndPrice($site['url'], $site['price_selector'], $site['screen_selector'], $site['resolution_selector']);

                        $laptops_prices_to_json[] = [
                            'website' => $site['website'],
                            'model' => $site['model_name'],
                            'screen_size' => $priceAndSize[1],
                            'price' => $priceAndSize[0],
                            'url' => $site['url'],
                            'resolution' => $priceAndSize[2]
                        ];

                        echo print_row_laptop($site['website'], $priceAndSize[0], $priceAndSize[1],$site['model_name'], $site['url'], $priceAndSize[2]);
                    }

                    saveArrayToJson($laptops_prices_to_json, 'lenovo_laptops_prices.json');
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="anti-scrapping">
        <img src="assets/antiscrap.png" alt="antiscrap-img" width="100%">
    </div>
    </body>
</html>
