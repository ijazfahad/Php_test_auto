<?php

namespace RPGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * saved
 *
 * @ORM\Table(name="saved")
 * @ORM\Entity(repositoryClass="RPGBundle\Repository\savedRepository")
 */
class saved
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="characterName", type="string", length=20)
     */
    private $characterName;

    /**
     * @var string
     *
     * @ORM\Column(name="health", type="string", length=4)
     */
    private $health;

    /**
     * @var int
     *
     * @ORM\Column(name="progress", type="integer")
     */
    private $progress;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=3)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="healthPotion", type="string", length=3)
     */
    private $healthPotion;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set characterName
     *
     * @param string $characterName
     *
     * @return saved
     */
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;

        return $this;
    }

    /**
     * Get characterName
     *
     * @return string
     */
    public function getCharacterName()
    {
        return $this->characterName;
    }

    /**
     * Set health
     *
     * @param string $health
     *
     * @return saved
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return string
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set progress
     *
     * @param integer $progress
     *
     * @return saved
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return saved
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set healthPotion
     *
     * @param string $healthPotion
     *
     * @return saved
     */
    public function setHealthPotion($healthPotion)
    {
        $this->healthPotion = $healthPotion;

        return $this;
    }

    /**
     * Get healthPotion
     *
     * @return string
     */
    public function getHealthPotion()
    {
        return $this->healthPotion;
    }


}

