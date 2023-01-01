<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 body {
      margin: 0;
      height: 100vh;
      overflow: hidden;
      background: linear-gradient(
        270deg, 
        red, orange, yellow, green, cyan, blue, indigo, violet,
        brown, grey, pink, lime, magenta, teal, navy, maroon,
        olive, gold, silver
      );
      background-size: 500% 500%;
      animation: rainbowBg 30s linear infinite;
      perspective: 1200px;
    }

    @keyframes rainbowBg {
      0% { background-position: 0% 50%; }
      100% { background-position: 100% 50%; }
    }
    </style>
</head>
<body>
    
</body>
