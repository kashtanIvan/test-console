<?php

namespace App\Models;

class TesterUser extends BaseUser
{
    /**
     * TesterUser constructor.
     */
    public function __construct()
    {
        $this->actions = [
            self::ACTION_TEST_CODE,
            self::ACTION_SET_TASK,
            self::ACTION_COMMUNICATE_WITH_MANAGER
        ];
    }

    /**
     * @return string
     */
    public function printActions(): string
    {
        $string = '';
        foreach ($this->getActions() as $action) {
            $string .= '* ' . $this->getActionTranslate($action) . PHP_EOL;
        }
        return $string;
    }

    /**
     * @param string $action
     * @return string
     */
    public function can(string $action): string
    {
        return in_array($action, $this->getActions()) ? 'true' : 'false';
    }
}
