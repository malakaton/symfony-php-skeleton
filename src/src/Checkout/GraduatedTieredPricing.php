<?php

declare(strict_types=1);

namespace App\Checkout;

final class GraduatedTieredPricing
{
    public function total(int $subscriptions)
    {
        return $subscriptions * 299;
    }
}
