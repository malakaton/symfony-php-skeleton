<?php

declare(strict_types=1);

namespace App\Checkout;

final class GraduatedTieredPricing
{
    public function total(int $subscriptions): int
    {
        $total = 0;

        $tiers = [
            new Tier(1, 2 , 299),
            new Tier(3, 10 , 239),
            new Tier(11, 25 , 219),
            new Tier(26, 50 , 199),
        ];

        foreach ($tiers as $tier) {
            $total += $tier->totalSubscriptionsPrice($subscriptions);
        }

        return $total;
    }
}
