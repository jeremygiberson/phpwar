phpwar
======

Code War php

PHPWar is a simple programming game where you develop your player and put this in the arena to fight against other players.

Each game has an Arena and the dimension of the arena can set with:

     <?php
    $arena = new Iannsp\PhpWar\Arena(10,10);
    ?>

Each Game can have any number of players, even One [win warranty] ;)
    
     <?php
    $arena = new Iannsp\PhpWar\Arena(10,10);
    $players = array (
    new Iannsp\PhpWar\Player\P1($arena->getWidth(), $arena->getHeight()),
    new Iannsp\PhpWar\Player\P1($arena->getWidth(), $arena->getHeight())
    );
    $game = new Iannsp\PhpWar\Game($arena, $players);


At this moment you control the number of game rounds. The next step is develop the end control(and the game run for itself).  

    $moves=0;
    while($moves < 100){
        $game->round();
        $moves++;
    }
    ?>


The playgame.php file is a sample about how to configure and set the game. It already print(bash) the game result, like this: 

<pre>
 0  .  1  .  1  1  0  1  0  0 
 0  1  0  1  .  0  1  1  0  1 
 .  .  .  0  1  1  1  0  1  . 
 0  1  0  1  1  .  0  1  0  1 
 0  0  .  1  0  1  .  1  .  . 
 1  1  0  1  .  1  1  0  1  1 
 .  .  1  1  1  0  1  1  0  1 
 1  1  0  1  0  0  1  1  0  . 
 .  1  .  .  .  1  0  1  1  1 
 1  .  .  1  0  0  .  1  1  1 
</pre>    
