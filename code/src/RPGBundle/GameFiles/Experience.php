<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/28/2017
 * Time: 12:23 PM
 */

namespace RPGBundle\GameFiles;

use Symfony\Component\DependencyInjection\Tests\Compiler\E;
/*
main();

function main()
{
    $exp = new Experience();
    echo $exp->getExperience()."\n";

     $exp->expPlusFive()."\n";


    echo $exp->getExperience()."\n";
    echo"hello\n";

}
*/


class Experience
{
    private $experience =0;


    public function setExperience(int $experience)
    {
        $this->experience = $experience;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function expPlusOne()
    {
        return $this->experience=$this->experience+2;


    }
    public function expPlusFive()
    {
        return $this->experience = $this->experience+5;


    }
    public function experienceCostLumous()
    {
        return $this->experience=$this->experience-3;
    }
    public function experienceCostStun()
    {
        return $this->experience=$this->experience-10;
    }
    public function experienceCostTorture()
    {
        return $this->experience=$this->experience-35;
    }
    public function experienceCostKill()
    {
        return $this->experience=$this->experience-50;
    }
    public function experienceN()
    {
        return $this->experience=$this->experience-2;
    }

}

