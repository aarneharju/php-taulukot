<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $ostoslista = ['maitoa', 'leipää', 'jauhelihaa', 'riisiä'];
        $ostoslista[] = 'omenoita';
        $ostoslista[0] = 'rasvatonta maitoa';
        sort($ostoslista);

        echo "<ul>" . "\n";
        
        foreach ($ostoslista as $listaElementti) {
            echo "<li>$listaElementti</li>";
        }

        echo "</ul>" . "\n";
    
    ?>
</body>
</html>