<?php

namespace App\Models;

class UserCreator
{
    /**
     * @param string $action
     * @return BaseUser
     * @throws \Exception
     */
    public static function getUser(string $action): BaseUser
    {
        if ($action === 'developer') {
            return new DeveloperUser();
        } elseif ($action === 'designer') {
            return new DesignerUser();
        } elseif ($action === 'tester') {
            return new TesterUser();
        } elseif ($action === 'manager') {
            return new ManagerUser();
        }
        throw new \Exception('No ' . $action . ' user!');
    }
}
