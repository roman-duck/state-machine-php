<?php

namespace App;

class StateMachine
{
    private array $states;
    private string $currentState;

    private object $object;

    public function __construct()
    {
        $this->states = [];
    }

    public function initialize(): void
    {
        $this->currentState = $this->states[0];
    }

    public function addState(string $state): void
    {
        $this->states[] = $state;
    }

    public function addTransition(string $from, string $to, string $action): void
    {
        //TODO: add transition states
    }

    public function setObject(object $object): void
    {
        $this->object = $object;
    }

    public function getCurrentState(): string
    {
        return $this->currentState;
    }

    public function can(string $state): bool
    {
        return $state === $this->currentState;
    }
}
