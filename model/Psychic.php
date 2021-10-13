<?php

namespace model;


class Psychic
{
    private $randomNumber = 0;
    private $rating = 0;
    private $randomNumbersHistory = [];


    public function generateRandomNumber()
    {
        $this->randomNumber = rand(10, 99);
    }

    public function getRandomNumber(): int
    {
        return $this->randomNumber;
    }

    public function calculateRating($userNumber)
    {
        $this->randomNumbersHistory[] = $this->randomNumber;

        if ($userNumber == $this->randomNumber) {

            $this->rating++;
        } else {
            $this->rating--;
        }
    }

    public function getRandomNumbersHistory(): array
    {
        return $this->randomNumbersHistory;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

}

