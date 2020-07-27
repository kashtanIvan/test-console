<?php

namespace App\Models;

abstract class BaseUser implements UserCanDo
{
    const ACTION_WRITE_CODE = 'writeCode';
    const ACTION_TEST_CODE = 'testCode';
    const ACTION_DRAW = 'draw';
    const ACTION_COMMUNICATE_WITH_MANAGER = 'communicateWithManager';
    const ACTION_SET_TASK = 'setTask';

    protected $actions = [];

    /**
     * @return string
     */
    abstract public function printActions(): string;

    /**
     * @param string $key
     * @return string
     */
    protected function getActionTranslate(string $key): string
    {
        $translate = [
            self::ACTION_WRITE_CODE => 'write code',
            self::ACTION_TEST_CODE => 'test code',
            self::ACTION_DRAW => 'draw',
            self::ACTION_COMMUNICATE_WITH_MANAGER => 'communication with the manager',
            self::ACTION_SET_TASK => 'set task'
        ];
        return $translate[$key] ?? '';
    }

    /**
     * @return array
     */
    protected function getActions(): array
    {
        return $this->actions;
    }
}
