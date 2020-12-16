<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland CookieConsentBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\CookieConsentBundle\Enum;

class PositionEnum
{
    const POSITION_TOP_LEFT = 'top-left';
    const POSITION_TOP_RIGHT = 'top-right';
    const POSITION_BOTTOM_LEFT = 'bottom-left';
    const POSITION_BOTTOM_RIGHT = 'bottom-right';

    /**
     * @var array
     */
    private static $positions = [
        self::POSITION_TOP_LEFT,
        self::POSITION_TOP_RIGHT,
        self::POSITION_BOTTOM_LEFT,
        self::POSITION_BOTTOM_RIGHT,
    ];

    /**
     * Get all cookie consent positions.
     */
    public static function getAvailablePositions(): array
    {
        return self::$positions;
    }
}
