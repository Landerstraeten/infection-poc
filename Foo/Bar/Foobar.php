<?php

declare(strict_types=1);

namespace Foo\Bar;

class Foobar implements FoobarInterface
{
    public function foobar(): string
    {
        return 'foobar';
    }
}
