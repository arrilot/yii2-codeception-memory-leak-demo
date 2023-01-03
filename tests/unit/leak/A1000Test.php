<?php

namespace test\unit\common\leak;

use Codeception\Test\Unit;

class TwoTest extends Unit
{
    /**
     * @dataProvider providerForFoo
     */
    public function testFoo(?string $smth): void
    {
        $this->assertTrue(true);
    }

    public function providerForFoo()
    {
        foreach (range(1, 1000) as $i) {
            yield ['smth' => 'bar'];
        }
    }
}
