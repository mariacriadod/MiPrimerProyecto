
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../webroot/css/style.css">
    <title>Variables</title>
</head>
<body>
    <header>
        <h1>Página principal de María</h1>
    </header>
    <main>
        <?php
            $a=4; 
            echo "la variable a es ".gettype($a)." y vale $a <br />";
            $a=4.2; 
            echo "la variable a es ".gettype($a)." y vale $a <br />";
        ?>
    </main>
    <footer>
        <address>
            &copy2019 María
        </address>
    </footer>
</body>
</html>