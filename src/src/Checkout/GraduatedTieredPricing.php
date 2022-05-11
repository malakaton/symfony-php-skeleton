<?php

declare(strict_types=1);

namespace App\Checkout;

final class GraduatedTieredPricing
{
    public function total(int $subscriptions): int
    {
        $tier1 = new Tier(1, 2 , 299);
        $tier2 = new Tier(3, 10 , 239);
        $tier3 = new Tier(11, 25 , 219);

        return $tier1->totalSubscriptionsPrice($subscriptions) +
            $tier2->totalSubscriptionsPrice($subscriptions) + $tier3->totalSubscriptionsPrice($subscriptions);
    }
}
