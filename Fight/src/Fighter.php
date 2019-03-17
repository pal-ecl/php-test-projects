<?php
declare(strict_types=1);

namespace App;

class Fighter
{
    private $name="Unknown fighter";
    private $choosenWeapon="Bare Hands";
    private $healthPoints=200;

    public function __construct(string $name, $weapon)
    {
        $this->name=$name;
        $this->choosenWeapon=$weapon;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getChoosenWeapon()
    {
        return $this->choosenWeapon;
    }

    public function getHealthPoints() : int
    {
        return $this->healthPoints;
    }

    public function setHealthPoints(int $damages)
    {
        $this->healthPoints=$this->healthPoints-$damages;
    }
}