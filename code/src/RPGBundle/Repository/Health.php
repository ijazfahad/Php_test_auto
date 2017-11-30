<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/28/2017
 * Time: 12:23 PM
 */

namespace RPGBundle\GameFiles;
/*
main();

function main()
{
    $health = new Health();
    echo $health->getHealth()."\n";

     $health->addHealth();


    echo $health->getHealth()."\n";
    echo"hello\n";

}
*/
class Health
{

    private $health=100;


    public function getHealth(): int
    {
        return $this->health;
    }
    public function hurt()
    {
        if($this->health>0)
        {
            return $this->health=$this->health-5;
        }
        else
        {
            echo"you dead bro...\n";
            echo"game over\n";
            exit();
        }

    }
    public function addHealth()
    {

        return $this->health=$this->health + 5;



    }



}