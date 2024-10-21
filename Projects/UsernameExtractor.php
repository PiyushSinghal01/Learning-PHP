<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="main-heading">
                <h1>Email Username Extractor</h1>
            </div>

            <div class="form-container">
                <form action="UsernameExtractor.php" method="POST">
                    <label for="email">Enter Your Email</label>
                    <input type="text" name="email">
                    <input type="submit" value="Extract Username" class="btn">
                </form>
            </div>
        </div>
    </div>




    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $email = trim($_POST['email']);

            $userName = explode('@', $email)[0];


            echo "<h1>Result</h1>";
            echo "<p>Username -> </p>" , $userName, "<br>";
        }
    ?>

</body>
</html>