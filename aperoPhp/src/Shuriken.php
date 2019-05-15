<?php

namespace App;

class Shuriken 
{
    private $shurikenStock = 60;
    
    public function getShurikenStock () 
    {
        return $this->shurikenStock;
    }

    public function setShurikenStock (integer $shuriken)
    {
        $this->shurikenStock = $shuriken;
        return $this;
    }

    //créer une fonction qui décrémente de -1

    private function hasShuriken (): bool
    {
        if ($this->shuriken->getShurikenStock() > 0)
        {
            return true;
        } 
        return false; 
    }
}