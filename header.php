
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang["h1header"]; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $lang["h1header"]; ?></h1>
        <div>
            <div>
                <?php $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);?>
                <a href="<?php echo  $uri_parts[0];?>?lang=en">en</a> | 
                <a href="<?php echo  $uri_parts[0];?>?lang=ru">ru</a>
            </div>
        </div>
    </header>