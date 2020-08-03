<?php

class Robot {
    private $name;
    private $usedNames = [];
    private $ALPHABET = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    private function generateName(): string {
        $genName = "";
        do {
            $letter1 = $this->ALPHABET[rand(0,25)];
            $letter2 = $this->ALPHABET[rand(0,25)];
            $num1 = rand(0,9);
            $num2 = rand(0,9);
            $num3 = rand(0,9);
            $genName = $letter1.$letter2.$num1.$num2.$num3;
        } while(!in_array($genName, $this->usedNames));
        array_push($usedNames, $genName);
        return $genName;
    }
    function __construct() {
        $name = $this->generateName();
    }

    public function setName() {
        $this->name = generateName();
    }
    public function getName() {
        return $this->name;
    }
    public function reset() {
        $this->setName();
    }
}