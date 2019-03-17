<?php
declare(strict_types=1);

namespace App\Weapons;

class Dagger implements WeaponInterface
{
    private $name="dagger";
    private $damage=0;

    public function getName() : string
    {
        return $this->name;
    }

    public function setDamage()
    {
        $this->damage=rand(10,30);
        return $this;
    }

    public function getDamage() : int
    {
        return $this->damage;
    }
}