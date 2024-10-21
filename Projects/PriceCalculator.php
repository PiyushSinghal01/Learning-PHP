<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="main-heading">
                <h1>Final Price Calculator</h1>
            </div>

            <div class="form-container">
                <form action="PriceCalculator.php" method="POST">
                    <label for="orginal_price">Orginal Price($):</label>
                    <input type="text" id="" name="orginal_price">

                    <label for="discount_amount">Discount Amount($):</label>
                    <input type="text" id="" name="discount_price">

                    <label for="tax_rate">Tax Rate(%):</label>
                    <input type="text" id="" name="tax_rate">

                    <input type="submit" value="Calculate Final Price" class="btn">
                </form>
            </div>
        </div>
    </div>




    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $op = $_POST['orginal_price'];
            $dp = $_POST['discount_price'];
            $tr = $_POST['tax_rate'];


            $discounted_price = $op - $dp;

            $final_price = $discounted_price + ($discounted_price * ($tr / 100));

            echo "<h1>Result</h1>";
            echo "<h3>Orginal Price</h3>" , number_format($op, 2), "<br>";
            echo "<h3>Discounted Price</h3>" , number_format($discounted_price, 2), "<br>";
            echo "<h3>Final Price</h3>" , number_format($final_price, 2), "<br>";
        }
    ?>

</body>
</html>