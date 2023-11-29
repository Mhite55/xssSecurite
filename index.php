<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faille : Injection XSS -> Cross-Site Scripting </h1>

    <form action="" method="get">
        <input type="text" name="test">

        <input type="submit" value="Envoyer">
    </form>

    <?php 

    // sans protection
        // if (isset($_GET['test'])) {
        //     echo $_GET['test'];
        // }


    // Avec protection
        if (isset($_GET['test'])) {
            echo htmlspecialchars($_GET['test']);
            // htmlspecialchars === htmlentities
        }
    ?>
    
</body>
</html>