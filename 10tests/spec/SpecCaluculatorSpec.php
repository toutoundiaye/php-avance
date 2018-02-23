<?php

namespace spec\test;

use test\SpecCaluculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpecCaluculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SpecCaluculator::class);
    }

    function it_sums_two_numbers()
    {
        $this->add(3, 4)->shouldReturn(7);
    }
}
