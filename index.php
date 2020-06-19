<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Bin2Dec - PHP</title>
</head>
<body>
<div class="jumbotron d-flex align-items-center min-vh-100">
    <div class="container w-25">
        <!-- set global var -->
        <?php $x = 0; ?>
        <form class="form-group border rounded p-3" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>"> 
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Binary</span>
            </div>
            <input class="form-control" type="text" id="binarioField" name="binarioName">
        </div>

        <?php
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(!preg_match('~^[01]+$~', $_POST['binarioName'])) {
                echo "Enter a valid binary number!";
            } else {
                $x = $_POST['binarioName'];
            }  
        }
        ?>

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Decimal</span>
        </div>
        <input class="form-control" type="text" id="decimalField" value="<?= bindec($GLOBALS['x']); ?>" disabled>
        </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3" type="submit">Convert</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>