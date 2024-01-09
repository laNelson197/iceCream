
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

        //For testing
        echo "<pre";
        var_dump($_POST);
        echo "</pre>";

        //get data from post array
        if (!empty($_POST['scoops'])){
            $scoops = $_POST['scoops'];
        }
        else{
            echo "<p> Enter scoops!</p>";
            return;
        }
        //dont think this is right
        if (!isset($_POST['flavor'])){
            $flavors = $_POST['flavor'];

        }
        else{
            echo "<p>Please select at least one flavor</p>";
            return;
        }

        if (!isset($_POST['cone'])){
            $cone = $_POST['cone'];
        }
        else{
            echo "<p>Please select a cone or cup</p>";
            return;
        }
        $flavorString = implode(",", $flavors);

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