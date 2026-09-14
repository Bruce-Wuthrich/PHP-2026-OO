<?php

class Chat
{
    public string $nom = 'Sans nom';
    public int $age = 0;
    public function miauler(): string
    {
        return 'Miaou !';
    }

}

$chat = new Chat();

 $chat->nom = 'Félix'. PHP_EOL;
 $chat->age ='3' . PHP_EOL;
 $chat->miauler() .PHP_EOL;
 echo "$chat->nom <br> $chat->age <br>";
 echo $chat->miauler() .PHP_EOL;
 

 


