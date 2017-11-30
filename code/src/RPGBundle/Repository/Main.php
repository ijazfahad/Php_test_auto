<?php

namespace RPGBundle\GameFiles;


//require 'CreateCharacter.php';
require 'Explore.php';


main();
function cls()
{
    $i = 10;

    while($i!=0)
    {
        exec("cls", $clearOutput);
        foreach($clearOutput as $cleanLine)
        {
            echo $cleanLine;
            echo"\n";
        }

        $i--;
    }


}

function main()
{
    $player = new Explore();
    $key = null;
    $characterName=null;
    do {
        echo "---------------Welcome to Harry Potter's Wizarding world-------------------\n";
        echo "Press 1 to Start new game?\n";
        echo "Press 2 to Resume old Game?\n";
        echo "Press 3 to exit game? :( \n";
        echo " \n";
        $key = readline("Enter Value: ");
        cls();


        if ($key == 1) {
            do {
                echo "Press 1 to create character\n";
                echo "Press 2 to use existing characters\n";
                echo "Press 3 to go back\n";
                echo "\n";

                $key1 = readline("Enter Value: ");
                cls();

                if ($key1 == 1) {
                    echo "Enter the name of your character \n ";

                    $NewName = readline("Enter name: ");
                    $characterName=$NewName;
                    cls();
                  //  echo $character;

                    if ($NewName != null) {
                        do {
                            echo "Press 1 to select Gryffindor\n";
                            echo "Press 2 to select Hufflepuff\n";
                            echo "Press 3 to select Ravenclaw\n";
                            echo "Press 4 to select Slytherin\n";
                            echo "Press 5 to go back\n";

                            $key3 = readline("Enter Value: ");
                            cls();


                            if ($key3 == 1) {

                                do {
                                    echo "You've selected Gryffindor\n";
                                    echo "Press 1 to Start new game\n";

                                    $key4 = readline("Enter Value: ");
                                    cls();

                                    if ($key4 == 1) {
                                        //startnewgame();
                                       // $player->test($characterName);
                                        $player->startgame($characterName);
                                        echo "\n";
                                    } else if ($key4 != 1) {
                                        echo " \n";
                                        echo " \n";
                                        echo "                  ///////////////////////////////////\n";
                                        echo "                   Please enter correct values \n";
                                        echo "                  ///////////////////////////////////\n\n\n";

                                    }

                                } while ($key4 != 1);


                            }
                            if ($key3 == 2) {


                                do {
                                    echo "You've selected Hufflepuff\n";
                                    echo "Press 1 to Start new game\n";

                                    $key4 = readline("Enter Value: ");
                                    cls();

                                    if ($key4 == 1) {
                                        $player->startgame($characterName);
                                        //startnewgame();
                                    } else if ($key4 != 1) {
                                        echo " \n";
                                        echo " \n";
                                        echo "                  ///////////////////////////////////\n";
                                        echo "                   Please enter correct values \n";
                                        echo "                  ///////////////////////////////////\n\n\n";

                                    }

                                } while ($key4 != 1);

                            }
                            if ($key3 == 3) {
                                echo "You've selected Ravenclaw\n";

                                do {
                                    echo "You've selected Ravenclaw\n";
                                    echo "Press 1 to Start new game\n";

                                    $key4 = readline("Enter Value: ");
                                    cls();

                                    if ($key4 == 1) {
                                        $player->startgame($characterName);
                                        //startnewgame();
                                    } else if ($key4 != 1) {
                                        echo " \n";
                                        echo " \n";
                                        echo "                  ///////////////////////////////////\n";
                                        echo "                   Please enter correct values \n";
                                        echo "                  ///////////////////////////////////\n\n\n";

                                    }

                                } while ($key4 != 1);

                            }
                            if ($key3 == 4) {

                                echo "You've selected Slytherin\n";

                                do {
                                    echo "You've selected Slytherin\n";
                                    echo "Press 1 to Start new game\n";

                                    $key4 = readline("Enter Value: ");
                                    cls();

                                    if ($key4 == 1) {
                                        $player->startgame($characterName);
                                        //startnewgame();
                                    } else if ($key4 != 1) {
                                        echo " \n";
                                        echo " \n";
                                        echo "                  ///////////////////////////////////\n";
                                        echo "                   Please enter correct values \n";
                                        echo "                  ///////////////////////////////////\n\n\n";

                                    }

                                } while ($key4 != 1);

                            }
                            if ($key3 == 5) {
                                echo "Going back....\n";
                                echo "\n";
                                echo "\n";
                            } else if ($key3 != 1 && $key3 != 2 && $key3 != 3 && $key3 != 4 && $key3 != 5) {
                                echo " \n";
                                echo " \n";
                                echo "                  ///////////////////////////////////\n";
                                echo "                   Please enter correct values \n";
                                echo "                  ///////////////////////////////////\n\n\n";

                            }

                        } while ($key3 != 5);

                    }


                }
                if ($key1 == 2) {
                    do {
                        echo "Press 1 to pick Harry\n";
                        echo "Press 2 to pick Hermoine\n";
                        echo "Press 3 to pick Ron\n";
                        echo "Press 4 to pick Dumbledore\n";
                        echo "Press 5 to go back\n";


                        $key2 = readline("Enter Value: ");
                        cls();

                        if ($key2 == 1) {

                            do {
                                echo "you picked Harry\n";
                                echo "Press 1 to Start new game\n";
                                $characterName = "Harry";


                                $key4 = readline("Enter Value: ");
                                cls();

                                if ($key4 == 1) {
                                    $player->startgame($characterName);
                                    //startnewgame();
                                } else if ($key4 != 1) {
                                    echo " \n";
                                    echo " \n";
                                    echo "                  ///////////////////////////////////\n";
                                    echo "                   Please enter correct values \n";
                                    echo "                  ///////////////////////////////////\n\n\n";

                                }

                            } while ($key4 != 1);
                        }
                        if ($key2 == 2) {

                            do {
                                echo "you picked Hermione\n";
                                echo "Press 1 to Start new game\n";
                                $characterName = "Hermione";

                                $key4 = readline("Enter Value: ");
                                cls();

                                if ($key4 == 1) {
                                    $player->startgame($characterName);
                                    //startnewgame();
                                } else if ($key4 != 1) {
                                    echo " \n";
                                    echo " \n";
                                    echo "                  ///////////////////////////////////\n";
                                    echo "                   Please enter correct values \n";
                                    echo "                  ///////////////////////////////////\n\n\n";

                                }

                            } while ($key4 != 1);
                        }
                        if ($key2 == 3) {

                            do {
                                echo "you picked Ron\n";
                                echo "Press 1 to Start new game\n";
                                $characterName = "Ron";

                                $key4 = readline("Enter Value: ");
                                cls();

                                if ($key4 == 1) {
                                    $player->startgame($characterName);
                                    //startnewgame();
                                } else if ($key4 != 1) {
                                    echo " \n";
                                    echo " \n";
                                    echo "                  ///////////////////////////////////\n";
                                    echo "                   Please enter correct values \n";
                                    echo "                  ///////////////////////////////////\n\n\n";

                                }

                            } while ($key4 != 1);
                        }

                        if ($key2 == 4) {

                            do {
                                echo "you picked Dumbledore\n";
                                $characterName = "Dumbledore";
                                echo "Press 1 to Start new game\n";

                                $key4 = readline("Enter Value: ");
                                cls();

                                if ($key4 == 1) {
                                    $player->startgame($characterName);
                                    //startnewgame();
                                } else if ($key4 != 1) {
                                    echo " \n";
                                    echo " \n";
                                    echo "                  ///////////////////////////////////\n";
                                    echo "                   Please enter correct values \n";
                                    echo "                  ///////////////////////////////////\n\n\n";

                                }

                            } while ($key4 != 1);
                        }
                        if ($key2 == 5)
                        {
                            echo "Going back.....\n";
                            echo "\n";
                            echo "\n";
                        }
                        else if ($key2 != 1 && $key2 != 2 && $key2 != 3 && $key2 != 4 && $key2 != 5)
                        {
                            echo " \n";
                            echo " \n";
                            echo "                  ///////////////////////////////////\n";
                            echo "                   Please enter correct values \n";
                            echo "                  ///////////////////////////////////\n\n\n";

                        }


                    } while ($key2 != 5);

                }
                if ($key1 == 3) {
                    echo "Going back.....\n";
                    echo "\n";
                    echo "\n";

                } else if ($key1 != 1 && $key1 != 2 && $key1 != 3) {
                    echo " \n";
                    echo " \n";
                    echo "                  ///////////////////////////////////\n";
                    echo "                   Please enter correct values \n";
                    echo "                  ///////////////////////////////////\n\n\n";

                }


            } while ($key1 != 3);


        }
        if ($key == 2) {
            do {
                echo "Press 1 to enter player's name\n";
                echo "Press 2 to go back to main menu\n";

                $key5 = readline("Enter Value:");

                cls();
                if ($key5 == 1) {
                    echo "Enter the name of your player: \n";
                    $NameOfPlayer = readline("Enter Name: ");
                    cls();
                    //search database for name
                    //if found,
                    if ($NameOfPlayer) {
                        do {
                            echo "Press 1 to start game\n";
                            echo "Press 2 to go back\n";
                            $key6 = readline("Enter Value: ");
                            cls();
                            if ($key6 == 1) {
                                $player->startgame($characterName);

                            }
                            if ($key6 == 2) {
                                echo "Going back....\n";

                            } else if ($key6 != 1 && $key6 != 2) {
                                echo " \n";
                                echo " \n";
                                echo "                  ///////////////////////////////////\n";
                                echo "                   Please enter correct values \n";
                                echo "                  ///////////////////////////////////\n\n\n";
                            }

                        } while ($key6 != 2);

                    }


                }
                if ($key5 == 2) {
                    echo "Going back.....\n";

                } else if ($key5 != 1 && $key5 != 2) {
                    echo " \n";
                    echo " \n";
                    echo "                  ///////////////////////////////////\n";
                    echo "                   Please enter correct values \n";
                    echo "                  ///////////////////////////////////\n\n\n";

                }


            } while ($key5 != 2);


        }
        if ($key == 3) {
            echo "EXITING....\n";
            echo "\n";
            echo "\n";
            echo "\n";
            echo "\n";
            echo "\n";
            echo "\n";


        } else if ($key != 1 && $key != 2 && $key != 3) {
            echo " \n";
            echo " \n";
            echo "                  ///////////////////////////////////\n";
            echo "                   Please enter correct values \n";
            echo "                  ///////////////////////////////////\n\n\n";

        }


    } while ($key != 3);

  //  $character = new CreateCharacter();

   // $character->setCharacterName('fahad');

    //echo $character->getCharacterName();
}






