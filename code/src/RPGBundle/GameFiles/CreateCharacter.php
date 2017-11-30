<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/27/2017
 * Time: 12:11 PM
 */

namespace RPGBundle\GameFiles;



class CreateCharacter
{

    public $character_name;
    public $character_house;

    public function getCharacterHouse()
    {
        return $this->character_house;
    }


    public function setCharacterHouse($character_house)
    {
        $this->character_house = $character_house;
    }




    public function getCharacterName()
    {
        return $this->character_name;
    }


    public function setCharacterName($character_name)
    {
        $this->character_name = $character_name;
    }





}