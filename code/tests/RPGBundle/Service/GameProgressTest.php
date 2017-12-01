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



class GameProgressTest extends  \PHPUnit_Framework_TestCase
{
    public $gameprogress = 50;

    public function testProgress()
    {



        $GameProgressTest = new GameProgress();
        $GameProgressTest->setGameProgress($this->gameprogress);

        //should just add 1

        $this->assertEquals(50, $GameProgressTest->gameProgress());
    }


}