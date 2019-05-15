<?php

namespace App;

class Score 
{
    private $score = 0; 

    public function getScore () 
    {
       return $this->score;
    }

    public function setScore (integer $score)
    {
        $this->score = $score;
        return $this;
    }
}