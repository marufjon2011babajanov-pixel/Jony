<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Ultimate Anime 3D Cube World</title>

  <style>
    
  body {
    margin: 0;
    height: 100vh;
    overflow: hidden;

    /* Juda uzun va boy gradient – cho'zilgan */
    background: linear-gradient(
      270deg, 
      red, orange, yellow, green, cyan, blue, indigo, violet,
      pink, magenta, deepPink, gold, lime, aqua, navy, purple,
      teal, turquoise, skyblue, coral, salmon, chartreuse,
      maroon, olive, silver, white, black
    );

    background-size: 2000% 2000%; /* cho‘zildi */
    animation: rainbowBg 15s linear infinite; /* sal tezlashdi */
    perspective: 1200px;
  }

 


  

    @keyframes rainbowBg {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Yulduzli galaktika */
    .stars {
      position: absolute;
      width: 100%;
      height: 100%;
      background: url('https://i.imgur.com/QpJ4pAI.png');
      animation: starMove 40s linear infinite;
      opacity: 0.25;
      pointer-events: none;
    }

    @keyframes starMove {
      0% { transform: translateY(0); }
      100% { transform: translateY(-2000px); }
    }

    /* Orbit */
    .orbit {
      width: 700px;
      height: 700px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform-style: preserve-3d;
      transform: translate(-50%, -50%);
      animation: orbitSpin 10s linear infinite;
    }

    @keyframes orbitSpin {
      0% { transform: translate(-50%, -50%) rotate(0deg); }
      100% { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Kub */
    .cube {
      width: 140px;
      height: 140px;
      position: absolute;
      transform-style: preserve-3d;
      animation: cubeSpin 1.2s linear infinite, rainbowColor 7s linear infinite;
      filter: drop-shadow(0 0 20px rgba(255,255,255,0.8));
    }

    #cube2 {
      animation-duration: 0.8s, 7s; /* tezroq */
    }

    @keyframes cubeSpin {
      0% { transform: rotateX(0) rotateY(0); }
      100% { transform: rotateX(360deg) rotateY(360deg); }
    }

    @keyframes rainbowColor {
      0% { background: red; }
      15% { background: orange; }
      30% { background: yellow; }
      45% { background: green; }
      60% { background: cyan; }
      75% { background: blue; }
      90% { background: violet; }
      100% { background: red; }
    }

    /* Kub yuzlari */
    .face {
      position: absolute;
      width: 100%;
      height: 100%;
      background: inherit;
      border: 2px solid rgba(255,255,255,0.4);
      box-shadow: inset 0 0 25px rgba(255,255,255,0.3);
    }

    .front  { transform: translateZ(70px); }
    .back   { transform: rotateY(180deg) translateZ(70px); }
    .right  { transform: rotateY(90deg) translateZ(70px); }
    .left   { transform: rotateY(-90deg) translateZ(70px); }
    .top    { transform: rotateX(90deg) translateZ(70px); }
    .bottom { transform: rotateX(-90deg) translateZ(70px); }

    /* Energiya izi */
    .trail {
      position: absolute;
      width: 140px;
      height: 140px;
      border-radius: 20px;
      background: rgba(255,255,255,0.15);
      filter: blur(8px);
      animation: trailFade 1s ease-out forwards;
      pointer-events: none;
    }

    @keyframes trailFade {
      0% { opacity: 0.6; transform: scale(1); }
      100% { opacity: 0; transform: scale(0.7); }
    }

    /* Anime flash */
    .flash {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: white;
      opacity: 0;
      animation: flashAnime 0.4s ease-out;
      pointer-events: none;
    }

    @keyframes flashAnime {
      0% { opacity: 0.8; }
      100% { opacity: 0; }
    }
  </style>
</head>
<body>

  <div class="stars"></div>

  <div class="orbit">
    <div class="cube" id="cube1" style="left:-120px; top:-120px;">
      <div class="face front"></div>
      <div class="face back"></div>
      <div class="face right"></div>
      <div class="face left"></div>
      <div class="face top"></div>
      <div class="face bottom"></div>
    </div>

    <div class="cube" id="cube2" style="left:120px; top:120px;">
      <div class="face front"></div>
      <div class="face back"></div>
      <div class="face right"></div>
      <div class="face left"></div>
      <div class="face top"></div>
      <div class="face bottom"></div>
    </div>
  </div>

  <script>
    const cubes = [document.getElementById('cube1'), document.getElementById('cube2')];

    setInterval(() => {
      cubes.forEach(cube => {
        const t = document.createElement('div');
        t.className = 'trail';
        t.style.left = cube.offsetLeft + 'px';
        t.style.top = cube.offsetTop + 'px';
        document.body.appendChild(t);
        setTimeout(() => t.remove(), 1000);
      });

      // Anime flash
      const f = document.createElement('div');
      f.className = 'flash';
      document.body.appendChild(f);
      setTimeout(() => f.remove(), 400);

    }, 900);
  </script>

</body>
</html>
