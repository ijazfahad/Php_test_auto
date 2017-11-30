<?php

namespace RPGBundle\GameFiles;



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
    $characterName = null;
    $experience = 0;
    $health = 100;
    $healthPotion = 0;
    $progress = 0;



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
                        $characterName = $NewName;
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
                                            $player->startgame($characterName, $health, $experience, $progress, $healthPotion);
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
                                            $player->startgame($characterName, $health, $experience, $progress, $healthPotion);
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
                                    //  echo "You've selected Ravenclaw\n";

                                    do {
                                        echo "You've selected Ravenclaw\n";
                                        echo "Press 1 to Start new game\n";

                                        $key4 = readline("Enter Value: ");
                                        cls();

                                        if ($key4 == 1) {
                                            $player->startgame($characterName, $health, $experience, $progress, $healthPotion);
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

                                    //  echo "You've selected Slytherin\n";

                                    do {
                                        echo "You've selected Slytherin\n";
                                        echo "Press 1 to Start new game\n";

                                        $key4 = readline("Enter Value: ");
                                        cls();

                                        if ($key4 == 1) {
                                            $player->startgame($characterName, $health, $experience, $progress, $healthPotion);                                        //startnewgame();
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
                                        $player->startgame($characterName, $health, $experience, $progress, $healthPotion);                                    //startnewgame();
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
                                        $player->startgame($characterName, $health, $experience, $progress, $healthPotion);                                    //startnewgame();
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
                                        $player->startgame($characterName, $health, $experience, $progress, $healthPotion);                                    //startnewgame();
                                    } else if ($key4 != 1) {
                                        echo " \n";
                                        echo " \n";
                                        echo "                  ///////////////////////////////////\n";
                                        echo "                   Please enter correct values \n";
                                        echo "                  ///////////////////////////////////\n\n\n";

                                    }

                                } while ($key4 != 1);
                            }


                            if ($key2 == 5) {
                                echo "Going back.....\n";
                                echo "\n";
                                echo "\n";
                            } else if ($key2 != 1 && $key2 != 2 && $key2 != 3 && $key2 != 4 && $key2 != 5) {
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
            if ($key == 2)
            {


                $mysql_host = "localhost";
                $mysql_user = "root";
                $mysql_password = null;
                $mydb = "php-coding-test";


                $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mydb, null, null);
                if (mysqli_connect_errno())
                {
                    createDB();
                    createtable();
                    //echo"Either the internet is down or you arent logged in your database\n\n\n";
                   // exit('Connect failed: ');
                } else {


                    if ($conn)
                    {
                        $t=null;
                        $stmnt = "SELECT * FROM saved";
                        echo "successfully connected  to database\n";
                        $query = mysqli_query($conn, $stmnt);
                        echo "///////////////saved games////////////////\n\n";
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "id: " . $row['id'] . "\tName:" . $row['characterName'] . "\tExperience: " . $row['experience'] . " \tHealth: " . $row['health'] . "\thealth potions: " . $row['healthPotion'] . "\n";
                            echo "\n\n";
                            $t++;
                        }
                    }
                    else
                        {

                        echo "no database found\n\n";
                    }
                    if ($t==null )
                    {
                        echo "found nothing in the database\n\n\n";
                    } else {


                        do {


                            echo "Press 1 to enter id to start playing the saved game \n";
                            echo "Press 2 to go back to main menu\n";


                            $key5 = readline("Enter Value: ");


                            // cls();
                            if ($key5 == 1) {
                                do {
                                    $x = 0;
                                    echo "Enter the Id of your player: \n\n";
                                    $ID = readline("Enter ID: ");
                                    cls();

                                    $user_query = "SELECT * FROM `saved` WHERE id=" . $ID;
                                    $ress = mysqli_query($conn, $user_query);
                                    while ($roww = mysqli_fetch_assoc($ress)) {
                                        $characterName = $roww['characterName'];
                                        $health = $roww['health'];
                                        $experience = $roww['experience'];
                                        $progress = $roww['progress'];
                                        $healthPotion = $roww['healthPotion'];
                                        $x = 1;


                                        do {
                                            echo "Press 1 to resume game\n";
                                            echo "Press 2 to go back\n";
                                            $key6 = readline("Enter Value: ");
                                            cls();
                                            if ($key6 == 1) {
                                                $player->startgame($characterName, $health, $experience, $progress, $healthPotion);

                                            }
                                            if ($key6 == 2) {
                                                echo "Going back....\n\n";
                                                break;

                                            } else if ($key6 != 1 && $key6 != 2) {
                                                echo " \n";
                                                echo " \n";
                                                echo "                  ///////////////////////////////////\n";
                                                echo "                   Please enter correct values \n";
                                                echo "                  ///////////////////////////////////\n\n\n";
                                            }

                                        } while ($key6 != 2);

                                    }
                                    if ($x != 1) {
                                        echo "No ID found\n\n";
                                        echo "Try again\n\n";

                                        echo "Press Enter to go back\n\n\n";
                                        readline("Press enter to go back");
                                        break;
                                    }


                                } while ($x != 1);

                            }

                            if ($key5 == 2) {
                                echo "Going back....\n\n\n";
                            } else if ($key5 != 1 && $key5 != 2) {
                                echo " \n";
                                echo " \n";
                                echo "                  ///////////////////////////////////\n";
                                echo "                   Please enter correct values \n";
                                echo "                  ///////////////////////////////////\n\n\n";

                            }


                        } while ($key5 != 2);
                    }


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


            }
        }while ($key != 3) ;
    }

 function createDB()
{

    $mysql_host="localhost";
    $mysql_user = "root";
    $mysql_password = null;
    $mydb = "php-coding-test";



    $conn =  mysqli_connect($mysql_host, $mysql_user, $mysql_password);

// check connection
    if (mysqli_connect_errno())
    {
        echo"Either the internet is down or you arent logged in your database\n\n\n";
        exit('Connect failed: ');
    }
    else {


// sql query with CREATE DATABASE
        $sql = "CREATE DATABASE `php-coding-test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

// Performs the $sql query on the server to create the database
        if (mysqli_query($conn, $sql)) {
            echo "Database php-coding-test successfully created\n\n\n";


            $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password);
             $createTable = "CREATE TABLE saved(id INT(11) , characterName VARCHAR(20) ,health INT(4),progress INT(4),experience INT(4),healthPotion INT(4));";
            if( mysqli_query($conn,$createTable))
            {
               echo"Table created \n";
            }
        } else {
            echo "Failed creating the database\n\n";
            echo " Try again later\n\n";
            echo " check if internet is connected or not\n\n";
            echo "Exiting..";
            exit();
        }
    }


}
 function createtable()
{
    $mysql_host="localhost";
    $mysql_user = "root";
    $mysql_password = null;
    $mydb = "php-coding-test";
    $conn =  mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mydb);
    if (mysqli_connect_errno())
    {
        echo"Either the internet is down or you arent logged in your database\n\n\n";
        exit('Connect failed: ');
    }
    else {


        $createTable = "CREATE TABLE saved (id INT(11), characterName VARCHAR(20) ,health INT(4),progress INT(11),experience INT(3),healthPotion INT(3));";
        if (mysqli_query($conn, $createTable)) {
            echo "table created\n";
        } else {
            echo "no\n";
        }
    }

}








