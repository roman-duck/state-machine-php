<?php

namespace App\Tests;

use App\StateMachine;
use PHPUnit\Framework\TestCase;

class StateMachineTest extends TestCase
{
    public function testStateMachine(): void
    {
        $machine = new StateMachine();

        $machine->addState('locked');
        $machine->addState('unlocked');

        $machine->addTransition('locked', 'unlocked', 'locked');
        $machine->addTransition('unlocked', 'locked', 'unlocked');

        $machine->setObject(new \stdClass());
        $machine->initialize();

        $current = $machine->getCurrentState();

        $this->assertEquals('locked', $current);
        $this->assertFalse($machine->can('unlocked'));
    }
}
