<?php

namespace App;


class Launch 
{
    private $shuriken;
    private $score;

    public function __construct ($shuriken, $score) 
    {
        $this->shuriken = $Shuriken;
        $this->score = $score;
    }

    public function Rate () 
    {
        $r = rand(0,100);
        if ($r>30)
        {
            return true;
        } 
        return false;
    }

    public function Hit ($shuriken, $score)
    {

        while ($shuriken->hasShuriken() === true && $Score->getScore() >=200)
        {
            if ($this->Rate() === true)
            {
                $shuriken->shurikenStock -= 1; //mettre la fonction qui décrémente ici 
                $score->score -= 10;
            }
            else {
                $score->score += 1;
            }
        }
    }



}