<?php
declare(strict_types=1);

namespace App;

use App\Exception\NotFighterException;
use App\Exception\NoWeaponException;
use App\Exception\SameFighterException;
use App\Weapons\WeaponInterface;


class Fight
{
    private $hit1=200;
    private $hit2=200;
    private $round=0;

    public function __construct($fighter1, $fighter2)
    {
        if (!($fighter1 instanceof Fighter) || !($fighter2 instanceof Fighter)){
            throw new NotFighterException ("ERROR : This is not a fighter.");
        }
        if ($fighter1 === $fighter2){
            throw new SameFighterException ("ERROR : A fighter must not fight versus himself.");
        }
        if (!($fighter1->getChoosenWeapon() instanceof WeaponInterface) || !($fighter2->getChoosenWeapon() instanceof WeaponInterface)){
            throw new NoWeaponException ("ERROR : Only authorised weapons are allowed.");
        }

        $this->fight($fighter1, $fighter2);
    }

    public function fight($fighter1, $fighter2)
    {
       while ($fighter1->getHealthPoints()>0 && $fighter2->getHealthPoints()>0){

           $this->round+=1;

            if ($this->hitFirst()===1){
              echo"Round $this->round :<br/>";
              $fighter1->getChoosenWeapon()->setDamage();
              $this->hit1 = $fighter1->getChoosenWeapon()->getDamage();
              $fighter2->setHealthPoints($this->hit1);
              echo $fighter1->getName()." hit ".$fighter2->getName()." for $this->hit1 damages.<br/>". $fighter2->getName()." has ".$fighter2->getHealthPoints()." health points left.<br/>";
             
              if ($fighter2->getHealthPoints()>0){
                $fighter2->getChoosenWeapon()->setDamage();
                $this->hit2 = $fighter2->getChoosenWeapon()->getDamage();
                $fighter1->setHealthPoints($this->hit2);
                echo $fighter2->getName()." hit ".$fighter1->getName()." for $this->hit2 damages.<br/>". $fighter1->getName()." has ".$fighter1->getHealthPoints()." health points left.<br/>";
              }

              echo'<br/>--------<br/>';
            }
            else {
                echo"Round $this->round :<br/>";
                $fighter2->getChoosenWeapon()->setDamage();
                $this->hit1 = $fighter2->getChoosenWeapon()->getDamage();
                $fighter1->setHealthPoints($this->hit1);
                echo $fighter2->getName()." hit ".$fighter1->getName()." for $this->hit1 damages.<br/>". $fighter1->getName()." has ".$fighter1->getHealthPoints()." health points left.<br/>";

                if ($fighter1->getHealthPoints()>0){
                    $fighter1->getChoosenWeapon()->setDamage();
                    $this->hit2 = $fighter1->getChoosenWeapon()->getDamage();
                    $fighter2->setHealthPoints($this->hit2);
                    echo $fighter1->getName()." hit ".$fighter2->getName()." for $this->hit2 damages.<br/>". $fighter2->getName()." has ".$fighter2->getHealthPoints()." health points left.<br/>";
                }
                
                echo'<br/>--------<br/>';
            }
       }
        if ($fighter1->getHealthPoints()<1){
            echo $fighter1->getName().' is dead.<br/>'.$fighter2->getName().' is the winner !<br/>';
        }
        if ($fighter2->getHealthPoints()<1){
            echo $fighter2->getName().' is dead.<br/>'.$fighter1->getName().' is the winner !<br/>';
        }
    }

    private function hitFirst()
    {
        return rand(0,1);
    }

}