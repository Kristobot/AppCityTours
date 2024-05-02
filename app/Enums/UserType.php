<?php

namespace App\Enums;

enum UserType: string
{
    case ADMIN = "Admin";
    case EMPLOYEE = "Employee";
    case CLIENT = "Client";
}