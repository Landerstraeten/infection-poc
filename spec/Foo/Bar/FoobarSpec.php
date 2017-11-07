<?php

namespace spec\Foo\Bar;

use PhpSpec\ObjectBehavior;

class FoobarSpec extends ObjectBehavior
{
    function it_should_not_increment_nor_decrement_zero()
    {
        $this->foobar(0)->shouldBe(0);
    }

    function it_should_increment_a_positive_number()
    {
        $this->foobar(5)->shouldBe(6);
        $this->foobar(1)->shouldBe(2);
    }

    function it_should_decrement_a_negative_number()
    {
        $this->foobar(-10)->shouldBe(-11);
        $this->foobar(-1)->shouldBe(-2);
    }
}
