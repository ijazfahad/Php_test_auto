<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/28/2017
 * Time: 7:39 AM
 */

namespace Tests\RPGBundle\Service;
use PHPUnit\Framework\TestCase;
use RPGBundle\GameFiles\GameProgress;



class GameProgressTest extends  TestCase
{
    public $gameprogress = 50;

    public function testProgress()
    {


        $GameProgressTest = new GameProgress();
        $GameProgressTest->setGameProgress($this->gameprogress);

        //should just add 1

        self::assertEquals(51, $GameProgressTest->gameProgress());
    }


}