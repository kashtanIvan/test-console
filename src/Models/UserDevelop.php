<?php

namespace App\Models;

class UserDevelop implements UserCanDo
{
    private $actions = null;

    public function __construct()
    {
        // default actions
        $this->actions = [
            'writeCode'
        ];
    }

    public function can(string $action): string
    {
        return in_array($action, $this->actions) ? 'true' : 'false';
    }

    public function userActions(): array
    {
        return [
            'eee',
            'dddd',
            'dsdfsdf'
        ];
    }

}
