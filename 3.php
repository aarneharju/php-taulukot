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
    
        $capitals = array( "Italia"=>"Rooma", "Tanska"=>"Kööpenhamina", "Suomi"=>"Helsinki", "Ranska" => "Pariisi", "Saksa" => "Berliini", "Kreikka" => "Ateena", "Irlanti"=>"Dublin", "Hollanti"=>"Amsterdam", "Espanja"=>"Madrid", "Ruotsi"=>"Tukholma", "Iso-Britannia"=>"Lontoo", "Viro"=>"Tallinna", "Unkari"=>"Budapest", "Itävalta" => "Vienna", "Puola"=>"Varsova");
        $capitalsSortedByKey = $capitals;
        ksort($capitalsSortedByKey);

        foreach ($capitalsSortedByKey as $country => $capital) {
            echo "$country: $capital";
            echo "<br>";
        }
    ?>

</body>
</html>