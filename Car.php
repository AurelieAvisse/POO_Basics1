<?php

class Car
{
    /**
     * @var integer
     */
    private $nbwheels;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeating;

    /**
     * @var string
     */
    private $typeOfEnergy;

    /**
     * @var integer
     */
    private $fuelLevel;

    //Constructeur
    public function __construct(string $color, int $nbSeating, string $typeOfEnergy)
    {
        $this->color = $color;
        $this->nbSeating = $nbSeating;
        $this->typeOfEnergy = $typeOfEnergy;
    }

    public function start()
    {
        return "Go !";
    }

    public function forward()
    {
        $this->currentSpeed = 18;

        return "The car is moving forward !";

    }

    public function brake()
    {
        $text = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $text .= "Brake !!!";
        }
        $text .= "I'm stopped !";
        return $text;
    }

    /**
     * @return int
     */
    public function getNbwheels(): int
    {
        return $this->nbwheels;
    }

    /**
     * @param int $nbwheels
     * @return void
     */
    public function setNbwheels(int $nbwheels): void
    {
        $this->nbwheels = $nbwheels;

    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($this->getCurrentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }

    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return void
     */
    public function setColor(string $color): void
    {
        $this->color = $color;

    }

    /**
     * @return int
     */
    public function getNbSeating(): int
    {
        return $this->nbSeating;
    }

    /**
     * @param int $nbSeating
     * @return void
     */
    public function setNbSeating(int $nbSeating): void
    {
        $this->nbSeating = $nbSeating;
    }

    /**
     * @return string
     */
    public function getTypeOfEnergy(): string
    {
        return $this->typeOfEnergy;
    }

    /**
     * @param string $typeOfEnergy
     * @return void
     */
    public function setTypeOfEnergy(string $typeOfEnergy): void
    {
        $this->typeOfEnergy = $typeOfEnergy;

    }

    /**
     * @return int
     */
    public function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    /**
     * @param int $fuelLevel
     * @return void
     */
    public function setFuelLevel(int $fuelLevel): void
    {
        $this->fuelLevel = $fuelLevel;

    }
}
