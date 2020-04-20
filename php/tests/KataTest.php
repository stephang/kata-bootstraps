<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use swkberlin\Kata;

require __DIR__ . '/../vendor/autoload.php';

class KataTest extends TestCase
{

    public function testNotFailing()
    {
        $this->assertTrue(true);
    }

    public function testBoard()
    {
        $board = new Kata([["X", "X", "X"], ["", "", ""], ["", "", ""]]);
        $result = $board->evaluate();
        $this->assertEquals("Illegal", $result);
    }

}
