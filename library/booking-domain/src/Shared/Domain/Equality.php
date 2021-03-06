<?php declare(strict_types=1);

namespace App\Shared\Domain;

use App\Booking\Entity\Guest;
use DateTimeImmutable;

class Equality
{
    public static function guestsAreEqual(Guest $left, Guest $right): bool // todo unit test
    {
        return $left->idAsString() === $right->idAsString();
    }

    public static function datesAreEqual(DateTimeImmutable $left, DateTimeImmutable $right): bool // todo unit test
    {
        return
            $left == $right &&
            (int)$left->format('u') === (int)$right->format('u');
    }
}
