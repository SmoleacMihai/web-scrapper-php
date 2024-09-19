<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Galaxy A51 Prices (6gb / 128gb)</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            table { width: 50%; border-collapse: collapse; margin-bottom: 20px; }
            th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        </style>
    </head>
    <body>
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
                require_once 'utils/save-prices-json.php';

                $prices_to_json = [];

                foreach (returnSitesConfig() as $site) {
                    $price = scrapePrice($site['url'], $site['selector']);
                    $prices_to_json[$site['name']] = $price;

                    echo print_row($site['name'], $price, $site['url']);
                }

                savePricesToJson($prices_to_json);
            ?>
            </tbody>
        </table>
    </body>
</html>
