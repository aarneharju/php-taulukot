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
    
        $numbersFrom1To100 = range(1,100);
        $numbersFrom1To100Shuffled = $numbersFrom1To100;
        shuffle($numbersFrom1To100Shuffled);
        $numbersFrom1To100ShuffledFirstFiveElements = array_slice($numbersFrom1To100Shuffled, 0, 5);
        $numbersFrom1To100ShuffledFirstFiveElementsString = implode(', ', $numbersFrom1To100ShuffledFirstFiveElements);

        echo "<p>";
        echo $numbersFrom1To100ShuffledFirstFiveElementsString;
        echo "</p>";
        
    ?>

</body>
</html>