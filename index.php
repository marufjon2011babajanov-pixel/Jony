<?php
function tubmi($son){
    if($son<2)  
    return false;
    for($i=2; $i<=sqrt($son); $i++) {
        if($son%$i==0)
         return false;
    }
    return true;
}

$n=3; 
$yigindi=0;

for ($i=$n;$i<=10;$i++) {
    if(tubmi($i)){
        echo $i . " ";
        $yigindi+=$i;
    }
}

echo "<br>Yig‘indisi: " . $yigindi;
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: yellow ;
        }
     h1{
   color:red;
   border:10px solid green;
   border-radius:5000px;
   text-align:center;
   padding: 70px ;
   background-color:blue;
     }

    </style>
</head>
<body><br><br><br><br><br><br><br><br><br><br><br>
    <hr><br><br><br><br>
        <h1></h1>
        <br><br><br><br> <hr>
</body>
</html>