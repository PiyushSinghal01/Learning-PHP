<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $expression = false ?>

    <?php if($expression == true): ?>
        this html statement will be rendered.
    <?php else: ?>
        Otherwise this html statement will be rendered.
    <?php endif; ?>
    
</body>
</html>