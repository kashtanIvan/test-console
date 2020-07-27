<?php

namespace App\Models;

interface UserCanDo
{
    public function can(string $action): string;
}
