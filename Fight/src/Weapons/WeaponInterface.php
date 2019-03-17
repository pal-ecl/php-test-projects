<?php

namespace App\Weapons;

interface WeaponInterface
{
    public function getName() : string;
    public function getDamage() : int;
}