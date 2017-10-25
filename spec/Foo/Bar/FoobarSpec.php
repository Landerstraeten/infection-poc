<?php

namespace spec\Foo\Bar;

use Foo\Bar\Foobar;
use PhpSpec\ObjectBehavior;

class FoobarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Foobar::class);
    }

    function it_should_say_foobar()
    {
        $this->foobar()->shouldBe('foobar');
    }
}
