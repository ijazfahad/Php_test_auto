<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 11/28/2017
 * Time: 12:24 PM
 */

namespace RPGBundle\GameFiles;


class GameProgress
{
    private $gameProgress=0;


    public function setGameProgress(int $gameProgress)
    {
        $this->gameProgress = $gameProgress;
    }

    public function getGameProgress(): int
    {
        return $this->gameProgress;
    }


    public function gameProgress()
    {

            return $this->gameProgress++;

    }


}