<?php


class Car
{
    /**
     * @var integer
     */
    private $nbWeels;

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
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->$color = $color;
        $this->$nbSeats = $nbSeats;
        $this->$energy = $energy;
    }

    public function forward()
    {
        $this->currentSpeed += 90;

        return "<br>" . "Faster !!!";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 30;
            $sentence = "<br>" . "OMG!!! Brake !!!";
        }
        $sentence .= "<br>" . "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        $sentence = "";
        if ($this->currentSpeed == 0) {
            $sentence .= "<br>" . "Vroum !!! My car is started";
        }
        return $sentence;
    }

    /**
     * @return int
     */
    public function getNbWeels(): int
    {
        return $this->nbWeels;
    }

    /**
     * @param int $nbWeels
     */
    public function setNbWeels(int $nbWeels): void
    {
        $this->nbWeels = $nbWeels;
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
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
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
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
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
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}