<?php

class Robot {
    public $position;
    public $direction;
    public const DIRECTION_NORTH = 0;
    public const DIRECTION_EAST = 1;
    public const DIRECTION_SOUTH = 2;
    public const DIRECTION_WEST = 3;

    public function __construct(array $pos, int $dir) {
        $this->position = $pos;
        $this->direction = $dir;
    }

    public function turnRight() {
        $this->direction += 1;
        if ($this->direction > 3) {
            $this->direction = 0;
        }
        return $this;
    }

    public function turnLeft() {
        $this->direction -= 1;
        if ($this->direction < 0) {
            $this->direction = 3;
        }
        return $this;
    }

    public function advance() {
        switch($this->direction) {
            case Robot::DIRECTION_NORTH:
                $this->position[1] += 1;
                break;
            case Robot::DIRECTION_EAST:
                $this->position[0] += 1;
                break;
            case Robot::DIRECTION_SOUTH:
                $this->position[1] -= 1;
                break;
            case Robot::DIRECTION_WEST:
                $this->position[0] -= 1;
                break;
        }
        return $this;
    }
    public function instructions(string $ins) {
        foreach(str_split($ins) as $char) {
            switch($char) {
                case "L":
                    $this->turnLeft();
                    break;
                case "R":
                    $this->turnRight();
                    break;
                case "A":
                    $this->advance();
                    break;
                default:
                    throw new InvalidArgumentException("Invalid Argumenent in Instructions string");
                    break;
            }
        }
    }
}
