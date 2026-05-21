<?php

namespace App\Enums;

enum UserRoles: string
{
    case ADMIN = 'admin';
    case Organizer = 'organizer';
    case Participant = 'participant';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
