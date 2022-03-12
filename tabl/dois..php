<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tabl/style.css">
    <title>Document</title>
</head>
<body>
<nav>
</nav>
<h1> De 1 até 100:</h1>




<?php
$cont = 1;

echo "<table> ";

    for ($i=1; $i <=10 ; $i++) { 
        echo"<tr>";

    for ($k=1; $k <=10 ; $k++) { 
        if($cont <10){
            echo"<td>00".($cont++)."</td>";
        }else if ($cont < 100) {
            echo"<td>0".$cont++."  </td>";

        }else{
            echo"<td>".$cont."</td>"
;        }
    }
    echo " </tr>";
    
}

echo "<table>";





?>






</body>
</html>

