<?php

include "vendor/autoload.php";

use App\Weapons\Dagger;
use App\Weapons\Spear;
use App\Weapons\Axe;
use App\Weapons\WeaponInterface;
use App\Exception\NotFighterException;
use App\Exception\NoWeaponException;
use App\Exception\SameFighterException;
use App\Fighter;
use App\Fight;

try
{
    $dagger = new Dagger();
    $spear = new Spear();
    $axe = new Axe();
    $perceval = new Fighter("Perceval", $dagger);
    $gauvain = new Fighter("Gauvain", $axe);
    $Fight1 = new Fight($perceval, $gauvain);
}

catch(Exception $e)
{
    echo $e->getMessage();
}

finally
{
    echo "End of the fight.";
}
