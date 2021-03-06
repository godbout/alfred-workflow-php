<?php

namespace Tests;

use Godbout\Alfred\Workflow\Variable;
use PHPUnit\Framework\TestCase;

final class VariableTest extends TestCase
{
    /** @test */
    public function it_may_have_a_name_and_a_value()
    {
        $variable = Variable::create('fruit', 'tomato');

        $this->assertSame(['fruit' => 'tomato'], $variable->toArray());
    }

    /** @test */
    public function a_variable_may_be_empty()
    {
        $variable = Variable::create();

        $this->assertSame([], $variable->toArray());
    }
}
