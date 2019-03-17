<?php
declare(strict_types=1);

namespace App\Weapons;

class Axe implements WeaponInterface
{
    private $name="axe";
    private $damage=0;

    public function getName() : string
    {
        return $this->name;
    }

    public function setDamage()
    {
        $this->damage=rand(15,25);
        return $this;
    }

    public function getDamage() : int
    {
        return $this->damage;
    }
}