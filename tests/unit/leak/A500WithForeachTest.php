<?php

namespace test\unit\common\leak;

use Codeception\Test\Unit;

class A500WithForeachTest extends Unit
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
        $result = [];
        foreach (range(1, 500) as $i) {
            $result[] = ['smth' => 'bar'];
        }

        return $result;
    }
}
