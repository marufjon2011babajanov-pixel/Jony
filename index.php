<?php
function b($a){
if($a<2)  
return false;
for($i=2; $i<=sqrt($a); $i++){
if($a%$i==0)
return false;
}
return true;
}
$n=100;  
$a=0;
for ($i=2; $i<=$n; $i++) {
if(b($i)){
echo $i . " ";
$a++;
}
}
echo "<br>jami tup sonla  " . $a;
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
        <h1><?= $i . " "?> <br> <?= "<br>jami tup sonla  " . $a?></h1>
        <br><br><br><br> <hr>
</body>
</html>