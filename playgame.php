<?php
require 'bootstrap.php';
$arena = new Iannsp\PhpWar\Arena(10,10);
$players = array (
new Iannsp\PhpWar\Player\P1($arena->getWidth(), $arena->getHeight()),
new Iannsp\PhpWar\Player\P1($arena->getWidth(), $arena->getHeight())
);
$game = new Iannsp\PhpWar\Game($arena, $players);

function render($game, $arena, $players)
{
   $w = $arena->getWidth();
   $h = $arena->getheight();
   $arenaArray = $arena->getArena(); 
print chr(27) . "[2J" . chr(27) . "[;H";
   for ($x = 0; $x<$w; $x++)
   {
        for ($y=0; $y < $h; $y++)
        {
            echo " ".($arenaArray[$x][$y])." ";
        }
        echo "\n";
   }
}


echo "runing a game\n";
$moves = 0;
while($moves < 100){
    $game->round();
    render($game, $arena, $players);
    $moves++;
}

var_dump($arena->stats());
