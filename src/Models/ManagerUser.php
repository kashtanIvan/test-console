<?php

namespace App\Models;

class ManagerUser extends BaseUser
{
    /**
     * ManagerUser constructor.
     */
    public function __construct()
    {
        $this->actions = [
            self::ACTION_SET_TASK
        ];
    }

    /**
     * @return string
     */
    public function printActions(): string
    {
        $string = '';
        foreach ($this->getActions() as $action) {
            $string .= '- ' . $this->getActionTranslate($action) . PHP_EOL;
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
