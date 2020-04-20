<?php

namespace swkberlin;

class Kata
{
    private $grid;

    function __construct($grid) {
        $this->grid = $grid;
    }

    public function evaluate() {
        if (!$this->validate()) {
            return "Illegal";
        }
        return $this->checkVertical();
    }

    private function checkVertical() {
        return "Player 1 wins";
    }

    private function validate() {
        $countX = $this->count("X");
        $countY = $this->count("Y");
        if ( $countX == $countY) return true;
        if ( $countX == $countY + 1) return true;
        return false;
    }

    private function count($player) {
        $counter = 0;
        foreach ($this->grid as $line) {
            foreach ($line as $cell) {
                $counter += $cell == $player ? 1 : 0;
            }
        }
        return $counter;
    }
}
