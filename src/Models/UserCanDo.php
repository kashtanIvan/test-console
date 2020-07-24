<?php

namespace App\Models;

interface UserCanDo
{
    public function userActions(): array;
    public function can(string $action): string;
}
