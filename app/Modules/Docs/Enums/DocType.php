<?php

namespace App\Modules\Docs\Enums;

enum DocType: string
{
    case PAY = 'pay';
    case ORDER = 'order';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
