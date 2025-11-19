<?php

namespace App\Enums;

enum UserType: string
{
    case ADMIN = 'admin';
    case MOD = 'mod';
    case COMPANY = 'company';
    case DRIVER = 'driver';
    case CUSTOMER = 'customer';
}
