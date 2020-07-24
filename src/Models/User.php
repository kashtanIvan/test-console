<?php

namespace App\Models;

class User
{
    private $action = [];

    /**
     * @param string $action
     * @return UserCanDo
     * @throws \Exception
     */
    public static function getUser(string $action): UserCanDo
    {
        if ($action === 'developer') {
            return new UserDevelop();
        } elseif ($action === 'designer') {
            //
        } elseif ($action === 'tester') {
            //
        } elseif ($action === 'manager') {
            //
        }
        throw new \Exception('now user');
    }
}
