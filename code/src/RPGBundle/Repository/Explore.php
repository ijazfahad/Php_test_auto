<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/27/2017
 * Time: 11:56 PM
 */


namespace RPGBundle\GameFiles;

use RPGBundle\Controller\DefaultController;
use RPGBundle\RPGBundle;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Tests\Controller;

//require 'RPGBundle/Controller/DefaultController.php';
require 'Health.php';
require 'GameProgress.php';

require 'Experience.php';
require 'HealthPotion.php';
require 'CreateCharacter.php';



class Explore
{





    public function startgame($characterName)
    {


       // $em = new DefaultController();
        $character = new CreateCharacter();
        $health = new Health();
        $gameProgress = new GameProgress();
        $experience = new Experience();
        $healthPotion = new HealthPotion();
        $mapExp = 0;
        $character->setCharacterName($characterName);

      //  echo"Character name: ".$character->getCharacterName()."\n";

       // echo "Congratulations, You've finished the game\n";


            echo "---------Welcome to the Hogwarts School of witchcraft and wizardry----------\n";
            echo"\n";
            echo"\n";
            echo" You are in the dungeons right now....\n";
            echo"\n";
            echo"\n";

            do
            {




            echo"Press 1 to move forward"."                     Health:".$health->getHealth()."\n";
            echo"Press 2 to Drink health potion"."              Map explored:".$mapExp."%\n";
            echo"Press 5 to save game and Exit"."               Experience: ".$experience->getExperience()."\n";
            echo"Press 6 to Exit WITHOUT saving"."              Health potions: ".$healthPotion->getHealthPotions()."\n";


            echo"\n";
            echo"\n";
            echo"\n";
            echo"\n";

            $val=readline("Enter Value: ");
            cls();

            if($val==1)
            {

                echo"Moving forward....\n";
                echo"\n";
                echo"\n";
                 $experience->expPlusOne();
                $progress=$gameProgress->gameProgress();
                if($progress==2) {
                    echo "---Professor Snape is coming towards you, What do you want to do?---\n\n";
                    echo "Press 1 to Hide\n";
                    echo "Press 2 to Fight\n\n";
                    $val2 = readline("Enter Value: ");
                    cls();
                    if ($val2 == 1) {
                        echo "\n";
                        echo "\n";
                        $experience->expPlusFive();
                        echo "Letting Professor Snape pass.";

                        sleep(1);
                        echo ".";
                        sleep(1);
                        echo ".";
                        sleep(1);
                        echo ".\n";
                        cls();
                        echo "---Experience gained 5 points---\n";
                        echo "\n";
                        echo "\n";

                    }
                    if ($val2 == 2) {

                        echo "---you don't have enough experience to fight off Snape---\n\n";
                        echo "--it would be wise to hide--\n\n";
                        echo "\n";
                        do {
                            echo "Press 1 to hide" . "                     Health:" . $health->getHealth() . "\n";
                            echo "press 2 to still fight" . "              Map explored:" . $mapExp . "%\n";
                            $val24 = readline("Enter Value: ");
                            cls();
                            if ($val24 == 1) {
                                echo "\n";
                                echo "\n";
                                $experience->expPlusFive();
                                echo "Letting Professor Snape pass.";
                                sleep(1);
                                echo ".";
                                sleep(1);
                                echo ".";
                                sleep(1);
                                echo ".\n";
                                cls();
                                echo "---Experience gained 5 points---\n";
                                echo "\n";
                                echo "\n";


                            }
                            if ($val24 == 2) {
                                while ($health->getHealth() > 0) {
                                    $health->hurt();


                                }
                                cls();
                                echo "\n";
                                echo "\n";

                                echo "you died fighting Snape. Although it was for a noble cause\n";
                                echo "Game Over....    " . "Health:" . $health->getHealth() . "\n\n";
                                echo "Press any key to exit the game\n";
                                readline("enter value");
                                cls();
                                {
                                    echo "Exiting.....\n";
                                    sleep(2);
                                    exit();

                                }


                            } else if ($val24 != 1 && $val24 != 2) {
                                echo " \n";
                                echo " \n";
                                echo "                  ///////////////////////////////////\n";
                                echo "                      Please enter correct values \n";
                                echo "                  ///////////////////////////////////\n\n\n";

                            }

                        } while ($val24 != 1);


                    } else if ($val2 != 1 && $val2 != 2) {
                        echo " \n";
                        echo " \n";
                        echo "                  ///////////////////////////////////\n";
                        echo "                      Please enter correct values \n";
                        echo "                  ///////////////////////////////////\n\n\n";

                    }

                }
                if($progress==4)
                {
                    echo"---health potion gained---\n\n\n";
                    $healthPotion->addPotion();
                }
                if($progress==5)
                {
                    echo"----You're out of dungeons finally and into the Main Lobby----\n\n\n";
                }
                if($progress==6)
                {
                    echo"---You see a troll in the lobby---\n\n\n";

                    do{

                        $x=0;
                        echo"Press 1 to hide\n";
                        echo"Press 2 to fight troll\n";
                        $val48=readline("Enter Value: ");
                        cls();
                        if($val48==1 ||$val48==2)
                        {
                            $x=1;
                        }



                        if($val48==1)
                        {
                            echo "\n";
                            echo "\n";
                            $experience->expPlusFive();
                            echo "Letting Troll wander away.";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo".\n";
                            cls();
                            echo "---Experience gained 5 points---\n";
                            echo "\n";
                            echo "\n";

                        }
                        if($val48==2)
                        {
                            $experience->experienceCostStun();
                            for($i=0;$i<2;$i++)
                            {
                                $experience->expPlusFive();
                                $health->hurt();

                            }

                            echo"---Troll took a swing at you---.\n\n\n";
                            echo"casting a stunning spell on troll.";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo".\n";
                            cls();
                            echo"---Experience gained 15 points---\n";
                            echo"---you lost 10 health---\n";
                            echo "\n";
                            echo "\n";





                        }
                        else if($val48!=1&&$val48!=2)
                        {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";
                        }

                    }while($x!=1);


                }

                if($progress==8)
                {
                    echo"---you are out in the Hogwarts grounds---\n\n";

                }


                if($progress==10)
                {
                    $y=0;
                    echo"---you encounter Hagrid in the grounds---\n\n";
                    do{
                        echo"Press 1 to talk to hagrid\n";
                        echo"Press 2 to tell him you're busy?\n";
                        $val36 = readline("Enter Value: ");
                        cls();
                        if($val36==1 ||$val36==2)
                        {
                            $y=1;
                        }

                        if($val36==1)
                        {
                            echo"Talking to Hagrid about Dragons.";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo".\n\n\n";
                            echo"---5 experience points gained---\n\n";
                            $experience->expPlusFive();

                        }
                        if($val36==2)
                        {
                            echo "---0 experience point gained---\n\n";
                            $experience->experienceN();
                        }
                        else if($val36!=1&&$val36!=2)
                        {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";

                        }



                    }while($y!=1);




                }

                if ($progress==13)
                {
                    echo"---you're in fobidden forrest---\n\n\n";

                    echo"--cast the lumous spell to illuminate your path--\n\n";

                    do{
                        echo"Press 1 to cast lumous spell? Costs 3 experience point\n";
                        $value = readline("Enter Value: ");

                        cls();
                        if($value==1)
                        {
                            $experience->experienceCostLumous();
                        }
                        else if($value!=1)
                        {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";
                        }



                    }while($value!=1);



                }

                if($progress ==15)
                {
                    echo"---health potion gained---\n\n\n";
                    $healthPotion->addPotion();


                }

                if($progress==17)
                {
                    $z=0;

                    do {


                        echo "---you encounter a wereWolf in the forrest---\n\n";
                        echo "Press 1 to hide behind a tree\n";
                        echo "Press 2 to cast a stunning spell? Cost 10 experience\n";
                        echo "Press 3 to cast a torture spell? Costs 30 experience points\n";

                        $val60 = readline("Enter Value: ");
                        cls();
                        if($val60==1||$val60==2||$val60==3)
                        {
                            $z=1;
                        }
                        if ($val60 == 1)
                        {
                            echo" waiting for the werewolf to pass.";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo ".\n\n\n";

                            echo"---WereWolf found you hiding behind a tree---\n\n\n";
                            do{
                                $a=0;
                                echo "Press 1 to cast a stunning spell? Cost 10 experience\n";
                                echo "Press 2 to cast a torture spell? Costs 30 experience points\n";
                                $val72 = readline("Enter value: ");
                                cls();
                                if($val72==1||$val72==2)
                                {
                                    $a=1;
                                }
                                if($val72==1)
                                {
                                    $experience->experienceCostStun();
                                    for($i=0;$i<4;$i++)
                                    {
                                        $experience->expPlusFive();
                                        $health->hurt();

                                    }
                                    echo"\n\n\n";
                                    echo"---WereWolf bit your leg.---\n\n\n";
                                    echo "casting a stunning spell on WereWolf.";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo".\n";
                                    cls();
                                    echo"---Experience gained 25 points---\n";
                                    echo"---you lost 20 health---\n";
                                    echo "\n";
                                    echo "\n";

                                }
                                if($val72==2)
                                {
                                    $experience->experienceCostTorture();
                                    for($i=0;$i<7;$i++)
                                    {
                                        $experience->expPlusFive();
                                        //$health->hurt();

                                    }
                                    for($j=0;$j<4;$j++)
                                    {
                                        $health->hurt();
                                    }
                                    echo"\n\n";
                                    echo"---WereWolf bit your leg.---\n\n";
                                    echo"casting a Torturing  spell on werewolf.";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo".\n\n";

                                    echo"WereWolf is howling in pain.";
                                    sleep(1);
                                    echo".";
                                    sleep(1);
                                    echo".";sleep(1);
                                    echo".\n";

                                    cls();
                                    echo"---Experience gained 40 points---\n";
                                    echo"---you lost 20 health---\n";
                                    echo "\n";
                                    echo "\n";

                                }
                                else if($val72!=1&&$val72!=2)
                                {
                                    echo " \n";
                                    echo " \n";
                                    echo "                  ///////////////////////////////////\n";
                                    echo "                      Please enter correct values \n";
                                    echo "                  ///////////////////////////////////\n\n\n";
                                }

                            }while ($a!=1);


                        }
                        if ($val60 == 2)
                        {
                            $experience->experienceCostStun();
                            for($i=0;$i<4;$i++)
                            {
                                $experience->expPlusFive();
                                $health->hurt();

                            }
                            echo"\n\n";
                            echo"---WereWolf bit your leg.---\n\n";
                            echo"casting a stunning spell on werewolf.";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo".\n";
                            cls();
                            echo "---Experience gained 25 points---\n";
                            echo"---you lost 20 health---\n";
                            echo "\n";
                            echo "\n";

                        }
                        if ($val60 == 3)
                        {
                            $experience->experienceCostTorture();
                            for($i=0;$i<6;$i++)
                            {
                                $experience->expPlusFive();
                                //$health->hurt();

                            }
                            for($j=0;$j<4;$j++)
                            {
                                $health->hurt();
                            }
                            echo"\n\n";
                            echo"---WereWolf bit your leg.---\n\n";
                            echo"casting a stunning spell on werewolf.";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo".\n\n";

                            echo"WereWolf is howling in pain.";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo".";sleep(1);
                            echo".\n";

                            cls();
                            echo"---Experience gained 40 points---\n";
                            echo"you lost 20 health\n";
                            echo "\n";
                            echo "\n";

                        }
                        else if ($val60 != 1 && $val60 != 2 && $val60 != 3) {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";

                        }
                    }while($z!=1);
                }



                if ($progress==20)
                {
                    echo"---health potion gained---\n\n\n";
                    $healthPotion->addPotion();
                }

                if($progress==22)
                {
                    echo"---You're back out of the forest, but it's night time---\n\n\n";

                }
                if($progress==24)
                {
                    echo"---Filch the care taker is checking for students who are out of bed--- \n\n";

                    $b=0;

                    do {


                        echo "Press 1 to hide behind a tree\n";
                        echo "Press 2 to cast a stunning spell? Cost 10 experience\n";
                        echo "Press 3 to cast a torture spell? Costs 30 experience points\n";

                        $val60 = readline("Enter Value: ");

                        cls();
                        if($val60==1||$val60==2||$val60==3)
                        {
                            $b=1;
                        }
                        if ($val60 == 1)
                        {
                            echo" waiting for the Filch to pass.";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo ".\n\n";

                            echo"---Filch found you hiding because your wand was lit due to lumous spell---\n\n";
                            do{
                                $c=0;
                                echo "Press 1 to cast a stunning spell? Cost 10 experience\n";
                                echo "Press 2 to cast a torture spell? Costs 30 experience points\n";
                                $val72 = readline("Enter value: ");
                                cls();
                                if($val72==1||$val72==2)
                                {
                                    $c=1;
                                }
                                if($val72==1)
                                {
                                    $experience->experienceCostStun();
                                    for($i=0;$i<4;$i++)
                                    {
                                        $experience->expPlusFive();
                                    //    $health->hurt();

                                    }

                                    echo "casting a stunning spell on Filch.";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo".\n";
                                    cls();
                                    echo "---Experience gained 25 points---\n";
                                   // echo" you lost 20 health\n";
                                    echo "\n";
                                    echo "\n";

                                }
                                if($val72==2)
                                {
                                    $experience->experienceCostTorture();
                                    for($i=0;$i<7;$i++)
                                    {
                                        $experience->expPlusFive();


                                    }

                                    echo "casting a Torturing  spell on Filch.";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo".\n\n";

                                    echo"Filch is howling in pain. ";
                                    sleep(1);
                                    echo".";
                                    sleep(1);
                                    echo".";sleep(1);
                                    echo".\n";

                                    cls();
                                    echo "---Experience gained 40 points---\n";
                                  //  echo" you lost 20 health\n";
                                    echo "\n";
                                    echo "\n";

                                }
                                else if($val72!=1&&$val72!=2)
                                {
                                    echo " \n";
                                    echo " \n";
                                    echo "                  ///////////////////////////////////\n";
                                    echo "                      Please enter correct values \n";
                                    echo "                  ///////////////////////////////////\n\n\n";
                                }

                            }while ($c!=1);


                        }
                        if ($val60 == 2)
                        {
                            $experience->experienceCostStun();
                            for($i=0;$i<4;$i++)
                            {
                                $experience->expPlusFive();


                            }

                            echo "casting a stunning spell on Filch.";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo".\n";
                            cls();
                            echo "---Experience gained 25 points---\n";
                          //  echo" you lost 20 health\n";
                            echo "\n";
                            echo "\n";

                        }
                        if ($val60 == 3)
                        {
                            $experience->experienceCostTorture();
                            for($i=0;$i<7;$i++)
                            {
                                $experience->expPlusFive();
                                //$health->hurt();

                            }
                            for($j=0;$j<4;$j++)
                            {
                                $health->hurt();
                            }
                          //  echo"WereWolf bit your leg.\n\n";
                            echo "casting a torturing  spell on filch.";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo ".";
                            sleep(1);
                            echo".\n\n";

                            echo"Filch is howling in pain.";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo".";sleep(1);
                            echo".\n";

                            cls();
                            echo "---Experience gained 40 points---\n";
                          //  echo" you lost 20 health\n";
                            echo "\n";
                            echo "\n";

                        }
                        else if ($val60 != 1 && $val60 != 2 && $val60 != 3) {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";

                        }
                    }while($b!=1);


                }

                if($progress==25)
                {
                    echo"---health potion gained---\n\n\n";
                    $healthPotion->addPotion();


                }

                if($progress==27)
                {
                    echo"---You're back in the main lobby---\n\n";

                }
                if($progress==28)
                {
                    echo"---you found a chocolate frog in the lobby. But the frog can be expired---\n\n";

                    do{
                        $d=0;
                        echo"if you eat the frog you would either lose 20 health or gain 30 experience points\n\n";
                        echo"Press 1 to risk it and eat the chocolate frog\n";
                        echo"Press 2 to leave the frog untouched\n\n";
                        $val84 = readline("Enter Value: ");
                        cls();
                        if($val84==1||$val84==2)
                        {
                            $d=1;

                        }
                        if($val84==1)
                        {
                            $rand = rand(0,1);
                            if($rand==0)
                            {
                                echo"---ooh, bad luck. you lost 20 health---\n\n";
                                for($l=0;$l<3;$l++)
                                {
                                    $health->hurt();
                                }

                            }
                            if($rand==1)
                            {
                                echo"---Congratulation, you gained 30 experience---\n\n";
                                $ex = $experience->getExperience();
                                if($ex>70)
                                {
                                    echo"---You've 70 experience. you can cast a killing from now on---\n";
                                }

                            }

                        }
                        if ($val84==2)
                        {
                            echo"\n\n";
                            echo"walked away from the frog\n\n";
                        }
                        else if($val84!=1&$val84!=2)
                        {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";

                        }


                    }while($d!=1);
                }



                if($progress==30)
                {
                    echo"---health potion gained---\n\n\n";
                    $healthPotion->addPotion();


                }

                if($progress ==32)
                {
                    echo"\n\n";
                    echo"--you were on the stairs when you got jinxed by Peeves the Poltergeist--\n\n";
                    $hth = $health->getHealth();

                        for($m=0;$m<2;$m++)
                        {
                            if($hth>0)
                            {
                                $health->hurt();
                                echo"losing Health:.............".$health->getHealth()."\n";
                                sleep(1);
                            }
                            else
                            {
                                echo" you died before anyone could come save you...\n\n";
                                echo" Game Over\n\n";
                                echo"Press any key to exit\n";
                                $exi=readline("Press any key");
                                echo"Exiting....";
                                sleep(2);
                                exit();
                            }

                        }
                        echo"\n\n\n";
                        echo"--Professon McGonagall found you and released you from the spell--\n\n";
                        echo"---15 health lost---\n\n";


                }

                if($progress==34)
                {
                    echo"---You're finally at the your house comman room---\n\n";
                }
                if($progress==35)
                {
                    echo"---health potion gained---\n\n\n";
                    $healthPotion->addPotion();


                }

                if($progress==37)
                {
                    echo"---You're moving towards your bed---\n\n";
                }

                if($progress==38)
                {
                    echo"---you find Tom Riddles diary on your bed---\n\n";
                }
                if($progress==39)
                {
                    echo"---You opened the diary and got possessed by Tom Riddle---\n\n";

                }

                if($progress==40)
                {


                    echo"---health potion gained---\n\n\n";
                    $healthPotion->addPotion();

                    echo"---Suddenly you gain consciousness---\n\n ";
                    echo "---you find yourself in the chamber of secrets facing a Basalisk---\n\n";

                    do{
                        echo"Press 1 to hide and wait for help to arrive\n";

                        $val96 = readline("Enter Value: ");
                        cls();


                        if($val96==1)
                        {
                            echo"waiting.";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo".";
                            sleep(1);
                            echo ".\n\n";

                            echo"---Fawks the Pheonix arrives with the sorting hat and the sword of Gryffindor---\n\n";
                            do{
                                echo"Press 1 to use the sword to kill Basalisk\n\n";
                                $val108 = readline("Enter Value: ");
                                if($val108==1)
                                {
                                    echo"You drove the sword through the roof of Basalisks mouth.";
                                    for($o=0;$o<4;$o++)
                                    {
                                     $experience->expPlusFive();
                                    }
                                    sleep(2);
                                    echo ".";
                                    sleep(2);
                                    echo ".\n\n";

                                    echo"Basalisk while thrashing around hit it's fang on your arm.";
                                    sleep(2);
                                    echo ".";
                                    sleep(2);
                                    echo ".\n\n";

                                    echo"You start losing health because of the poison in the Fang.";
                                    sleep(2);
                                    echo ".";
                                    sleep(2);
                                    echo ".\n\n";
                                    for($m=0;$m<3;$m++)
                                    {
                                        if($health->getHealth()>0)
                                        {
                                            $health->hurt();
                                            echo"losing Health:.............".$health->getHealth()."\n";
                                            sleep(1);
                                        }
                                        else
                                        {
                                            echo" you died before anyone could come save you...\n\n";
                                            echo" Game Over\n\n";
                                            echo"Press any key to exit\n";
                                            $exi=readline("Press any key");
                                            echo"Exiting....";
                                            sleep(2);
                                            exit();
                                        }

                                    }

                                    echo"Fawks' healing tears heal up your wound instantly.";
                                    sleep(1);
                                    echo ".";
                                    sleep(1);
                                    echo ".\n\n";

                                    echo"---you gained 25 experience points---\n\n";
                                    echo"---you lost 15 health---\n\n";

                                }
                                else if($val108!=1)
                                {
                                    echo " \n";
                                    echo " \n";
                                    echo "                  ///////////////////////////////////\n";
                                    echo "                      Please enter correct values \n";
                                    echo "                  ///////////////////////////////////\n\n\n";
                                }
                            }while($val108!=1);


                        }

                        else if($val96!=1)
                        {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";
                        }
                    }while($val96!=1);





                }
                if ($progress==41)
                {
                    echo"you use the Basalisks fang to destroy Tom Riddles Diary.";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".\n\n";


                }

                if($progress==42)
                {
                    echo"---you sit there for a second taking it all in.---\n\n";
                }

                if($progress==43)
                {
                    echo" fawks is flying you back the main lobby.";

                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".\n\n";
                }
                if($progress==44)
                {
                    echo"still flying.";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".\n\n";
                }
                if($progress==45)
                {
                    echo"---health potion gained---\n\n\n";
                    echo"---you're in the main lobby---\n\n\n";
                    $healthPotion->addPotion();


                }

                if($progress==46)
                {
                    echo "---health potion gained---\n\n\n";
                    $healthPotion->getHealthPotions();
                }
                if($progress==47)
                {
                    echo"Now would be a great time to drink all the health potions.";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".\n\n";
                }
                if($progress==48)
                {
                    echo"---health potion gained---\n\n\n";

                    $healthPotion->addPotion();
                }
                if($progress==49)
                {
                    echo"Suddenly out of nowhere, Lord Voldermort arrives in front of you.";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo".\n\n";
                    echo"He appears to be very angry.";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo".\n\n";

                    echo"YOU!!!! HOW DARE YOU DESTROY MY DAIRY.I WILL END YOU.";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo".\n\n";

                    echo"You are very scared but you know that he is weak right now.";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo ".";
                    sleep(1);
                    echo".\n\n";




                    do{
                        echo"Press 1 to cast Killing spell\n";
                        $val120 = readline("Enter Value: ");
                        echo"\n\n";

                        if($val120==1)
                        {
                            $vhealth = 100;
                            echo"!!!!!!!!!!AVADA KEDAVRA!!!!!!!!!!\n\n\n";
                            echo"  You                            Voldermort\n";
                            echo " ~~~                              ___\n";
                            echo "/. .\                            /. .\ \n";
                            echo "\ - /                            \ - /\n";
                            echo " /|\_ ========================== _/|\ \n";
                            echo "  |                                | \n";
                            echo " / \                              / \ \n";
                            for($p=0;$p<=10;$p++)
                            {
                                echo"your health:".$health->getHealth()."      voldermort's health:$vhealth\n";
                                if($health->getHealth()!=0)
                                {
                                    sleep(2);
                                    $vhealth = $vhealth-10;
                                    $health->hurt();
                                    $experience->expPlusFive();
                                }
                                else
                                {
                                    echo"You died before Voldermort..\n";
                                    echo "Game over...\n";
                                    echo "experience: ".$experience->getExperience()."\n";
                                    echo"Press any key to exit";
                                    $exitt = readline("Enter Value");
                                    echo"Exiting...";
                                    sleep(3);
                                    exit();
                                }

                            }
                            echo"Congratulation, You killed the Dark Lord\n\n";

                        }
                        else if($val120!=1)
                        {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                      Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";
                        }



                    }while($val120!=1);
                }





                if($progress==50)
                {
                    echo"Congratulations, You've finished the game\n\n\n";
                    echo"------------Health: ".$health->getHealth()."----------------------"."\n";
                    echo"------------Experience: ".$experience->getExperience()."-----------------"."\n";
                    echo"------------Health potions: ".$healthPotion->getHealthPotions()."-----------------"."\n";
                    echo"------------Map Explored: ".$mapExp."%-----------------"."\n";

                    echo "Press any key to exit\n";
                    readline("Enter any value:");
                    cls();
                    exit();


                }


               //else if ($progress!=2||$progress!=4||$progress!=5||$progress!=6||$progress!=8||$progress!=10||$progress!=13||$progress!=15||$progress!=17||$progress!=20||$progress!=22||$progress!=24||$progress!=25||$progress!=27||$progress!=28||$progress!=30||$progress!=32||$progress!=34||$progress!=35||$progress!=37||$progress!=38||$progress!=39||$progress!=40||$progress!=41||$progress!=42||$progress!=43||$progress!=44||$progress==45||$progress==46||$progress==47||$progress==48||$progress==49||$progress==50)
                //else
                //{

//                    echo "Nothing encountered...Keep going forward\n\n\n";
  //              }






            }
            if($val==2)
            {
                $potion = $healthPotion->getHealthPotions();
                if($potion>0)
                {
                    if($health->getHealth()<100)
                    {
                        echo"Drinking health potion.";
                        sleep(1);
                        echo".";
                        sleep(1);
                        echo".";
                        $health->addHealth();
                        echo"5 health added\n\n\n";
                        $healthPotion->removeHealthPotion();
                    }
                    else
                    {
                        echo"Health already at Max\n";
                    }


                }
                else
                {
                    echo"potion not available\n";
                }


            }
            if($val==3)
            {
                echo"fetching data from database\n";


                //
            }

            if($val==5)
            {
                echo"Saving game.....\n";
                //call save game func..
                echo"Exiting....\n";
                echo"\n";
                echo"\n";
                sleep(2);
                exit();
                //save game here
               // main();
            }
            if($val==6)
            {
                echo"Exiting Game.";
                sleep(1);
                echo".";
                sleep(1);
                echo".";
                sleep(1);
                echo".";

              //  echo"Exiting Game....\n";
                echo"\n";
                echo"\n";

              //  sleep(2);
                exit();


            }
            else if($val!=1 && $val!=2 && $val!=5 &&$val!=6)
                {
                    echo" \n";
                    echo" \n";
                    echo"                  ///////////////////////////////////\n";
                    echo"                      Please enter correct values \n";
                    echo"                  ///////////////////////////////////\n\n\n";
                }
             $mapExp=$gameProgress->getGameProgress()*2;

        }while($val!=5);


    }


}





















