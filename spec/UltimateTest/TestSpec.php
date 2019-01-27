<?php

namespace spec\UltimateTest;

use UltimateTest\Test;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Test::class);
    }

    function its_test_function_should_return_string(){
        $this->test()->shouldBeString();
    }
}
