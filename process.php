
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
        echo "<pre";
        var_dump($_POST);
        echo "</pre>";

        $scoops = $_POST['scoops'];
        $flavors = $_POST['flavor'];
        $flavorString = implode(",", $flavors);
        $cone = $_POST['cone'];
        //Print a summary
        echo "<p>$scoops scoops</p>";
        echo "<p>Flavors: $flavorString</p>";
        echo "<p>Cone: $cone</p>";
    ?>
</body>
</html>