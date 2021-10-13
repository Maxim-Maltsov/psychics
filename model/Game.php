<?php

namespace model;


class Game
{
    private $userNumber;
    private $userNumbersHistory = [];
    private $psychics = [];
    private $psychicsAmount = 2;


    public function __construct()
    {
        $this->initPsychics();
    }


    public function initPsychics()
    {
        for ($i = 0; $i < $this->psychicsAmount; $i++) {

            $psychic = new Psychic();
            $this->psychics[] = $psychic;
        }
    }

    public function getPsychics(): array
    {
        return $this->psychics;
    }

    public function askPsychicsGenerateNumber()
    {
        foreach ($this->psychics as $psychic) {

            $psychic->generateRandomNumber();
        }
    }

    public function calculatePsychicsRating($userNumberPost)
    {
        $this->userNumber = $userNumberPost;
        $this->userNumbersHistory[] = $this->userNumber;

        foreach ($this->psychics as $psychic) {
            
            $psychic->calculateRating($this->userNumber);
        }
    }

    public function getUserNumbersHistory(): array
    {
        return $this->userNumbersHistory;
    }

}

