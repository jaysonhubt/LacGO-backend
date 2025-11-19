<?php

namespace App\Enums;

enum UserStatus: string
{
    case DISABLE = 'disable';
    case PENDING = 'pending';
    case ACTIVE = 'active';
}
