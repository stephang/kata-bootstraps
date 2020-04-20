<?php

namespace swkberlin;

class Kata
{
    private $grid;

    function __construct($grid) {
        $this->grid = $grid;
    }

    public function evaluate() {
        return "Illegal";
    }
}
