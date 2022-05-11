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

        if ($subscriptions >= 11) {
            return $tier1->totalPrice() +
                $tier2->totalPrice() +
                ($subscriptions - $tier1->size() - $tier2->size()) * $tier3->price();
        }

        if ($subscriptions >= 3) {
            return $tier1->totalPrice() + ($subscriptions - $tier1->size()) * $tier2->price();
        }

        return $subscriptions * 299;
    }
}
