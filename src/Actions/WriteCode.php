<?php

namespace App\Actions;

/**
 * Class WriteCode
 * @package App\Actions
 */
class WriteCode implements UserActionInterface
{
    /**
     * @return string
     */
    public function printAction(): string
    {
        return 'write code';
    }

}
