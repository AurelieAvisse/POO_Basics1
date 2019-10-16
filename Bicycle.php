<?php

class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var boolean
     */
    private $luggageRack;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var integer
     */
    private $nbWheels;

    //Constructeur
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

// GETTERS ANS SETTERS

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
     * @return bool
     */
    public function getLuggageRack(): bool
    {
        return $this->luggageRack;
    }

    /**
     * @param bool $luggageRack
     * @return void
     */
    public function setLuggageRack(bool $luggageRack): void
    {
        $this->luggageRack = $luggageRack;

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
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     * @return void
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;

    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     * @return void
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;

    }
}
