<?php


namespace Tests\RPGBundle\Service;

use PHPUnit\Framework\TestCase;
use RPGBundle\GameFiles\Experience;

class SpellTest extends TestCase
{

    public $experience = 85;


    public function CastTortureSpellTest()
    {
        $tortureTestCost = new Experience();
        $tortureTestCost->setExperience($this->experience);
        //torture spell costs 35 experience so 85-35=50

        self::assertEquals(50, $tortureTestCost->experienceCostTorture());
    }


}