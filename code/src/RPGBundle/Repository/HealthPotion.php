<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/28/2017
 * Time: 12:38 PM
 */

namespace RPGBundle\GameFiles;


class HealthPotion
{
    private $healthPotions = 0;

    public function getHealthPotions(): int
    {
        return $this->healthPotions;
    }
    public function addPotion()
    {
        return $this->healthPotions++;
    }
    public function removeHealthPotion()
    {
        return $this->healthPotions=$this->healthPotions-1;
    }



}