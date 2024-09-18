<?php

$video=[
  [ 
    'subtitle'=>'Ball Switch',
    'description'=>'This is first game i made and first i did this in order to learning lua a simple game when whenever the ball has been click it will teleport in a random place in window.'
    ,'file'=>'asset\ball swtich.mp4'

  ],

  [ 
    'subtitle'=>'Name Generator',
    'description'=>'This one could also work on smartphone because i also program it to more with phone as long as it has touchscreen it will work'
    ,'file'=>'asset\name generator.mp4'

  ],

  [ 
    'subtitle'=>'Pong',
    'description'=>'this is pong my second projects on lua to play you need two players for player one the controlls are wasd and player two it is the arrows keys each time the ball bounce on one of the paddle the ball velocity will accelerate until the ball reaches one of the goal of the one of the player'
    ,'file'=>'asset\pong.mp4'

  ],

  [ 
    'subtitle'=>'Ghost collect',
    'description'=>'this is ongoing projects made in gdscript where the objective is to get certain number of coins on a given time. the assets are also made by me as also studying characters design and animation.'
    ,'file'=>'asset\gd.mp4'

  ],
  [ 
    'subtitle'=>'Band Website',
    'description'=>'This a Group project Made with html,css and javasript making a band website.
    ,while utilizing bootstrap grip system.'
    ,'file'=>'asset\0918.mp4'

  ]
]





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Oleo+Script:wght@400;700&family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Dosis:wght@200..800&family=Oleo+Script:wght@400;700&family=Satisfy&display=swap" rel="stylesheet">






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="2ndpage_style.css" rel="stylesheet">
</head>
<body>
<nav class="menu-nav">
  <div class="container-fluid" >
    <nav>
    <ul class="menu">
        <li ><a href="index.php">Main</a></li>
        <li ><a id="projects"  href="projects.php" >Projects</a></li>
    </ul>
    </nav>


    
  </div>


  <section>
  <div class=title>Projects</div>
  
<div class="container-fluid">
  <?php foreach($video as $item): ?>
    <div class='row'>
      <div class='col'>
        <video width="500" muted autoplay loop><source src="<?php echo htmlspecialchars($item['file']); ?>" type="video/mp4"></video>
      </div>
      <div class='col'>
        <div class="subtitle"><?php echo htmlspecialchars($item['subtitle']); ?></div>
        <div class="description"><?php echo htmlspecialchars($item['description']); ?></div>
      </div>
    </div>
  <?php endforeach?>
 
</div>
</section>
    



</body>
</html>