<?php

namespace test\unit\common\leak;

use Codeception\Test\Unit;

class OneTest extends Unit
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
        foreach (range(1, 500) as $i) {
            yield ['smth' => 'bar'];
        }
    }
}
