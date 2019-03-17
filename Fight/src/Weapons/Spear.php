<?php
declare(strict_types=1);

namespace App\Weapons;

class Spear implements WeaponInterface
{
    private $name="spear";
    private $damage=0;

    public function getName() : string
    {
        return $this->name;
    }

    public function setDamage()
    {
        $this->damage=rand(20,25);
        return $this;
    }

    public function getDamage() : int
    {
        return $this->damage;
    }
}