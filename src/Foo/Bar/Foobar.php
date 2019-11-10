<?php

declare(strict_types=1);

namespace Foo\Bar;

class Foobar
{
    public function foobar(int $number): int
    {
        if ($number > 0) {
            return $number + 1;
        }

        if ($number === 0) {
            return 0;
        }

        return $number - 1;
    }

    // switch statement 15 with 11 to see a false positive result (mutation)

    // make number nullable to see a false positive result (code coverage)
}
