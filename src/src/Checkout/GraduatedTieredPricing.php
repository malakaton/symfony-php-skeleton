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

        $tier1size = $tier1->size();
        $tier1total = $tier1->totalPrice();
        $tier2size = $tier2->size();
        $tier2total = $tier2->totalPrice();
        $tier3price = $tier3->price();

        if ($subscriptions >= 11) {
            return ($tier1total + $tier2total) + ($subscriptions - $tier1size - $tier2size) * $tier3price;
        }

        if ($subscriptions >= 3) {
            return $tier1total + ($subscriptions - $tier1size) * 239;
        }

        return $subscriptions * 299;
    }
}
