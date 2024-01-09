
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Ice Cream Shoppe</title>

</head>
<body>
    <h1>Thank your for your order!</h1>

    <?php
        //turn on error reporting
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        define('PRICE_PER_SCOOP', 2.50);
        define('SALES_TAX_RATE', 0.11);


        echo "<pre";
        var_dump($_POST);
        echo "</pre>";

        $scoops = $_POST['scoops'];
        $flavors = $_POST['flavor'];
        $flavorString = implode(",", $flavors);
        $cone = $_POST['cone'];

        //Calculate total due
        $subtotal = PRICE_PER_SCOOP * $scoops;
        $tax = $subtotal * SALES_TAX_RATE;
        $total = $subtotal + $tax;

        //Print a summary
        echo "<p>$scoops scoops</p>";
        echo "<p>Flavors: $flavorString</p>";
        echo "<p>Cone: $cone</p>";

        echo "<p>Subtotal: $subtotal</p>";
        echo "<p>Tax: $tax</p>";
        echo "<p>Total: $total</p>";


    ?>
</body>
</html>