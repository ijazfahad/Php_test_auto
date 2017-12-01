<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/28/2017
 * Time: 7:27 AM
 */

namespace Tests\RPGBundle\Service;

use PHPUnit\Framework\TestCase;
use RPGBundle\GameFiles\Health;



class healthTest extends  \PHPUnit_Framework_TestCase
{

    public $health = 70;

    public function testHurt()
    {
        $healthTest = new Health();
        $healthTest->setHealth($this->health);
        //hurt causes the health to decrease by 5

        self::assertEquals(65, $healthTest->hurt());
    }



}