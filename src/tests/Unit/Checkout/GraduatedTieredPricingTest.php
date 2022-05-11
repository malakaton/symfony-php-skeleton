<?php

declare(strict_types=1);

namespace App\Tests\Unit\Checkout;

use App\Checkout\GraduatedTieredPricing;
use App\Tests\Unit\Shared\Infrastructure\PhpUnit\UnitTestCase;

class GraduatedTieredPricingTest extends UnitTestCase
{
    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_1_subscription(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(1);

        self::assertEquals(299, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_2_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(2);

        self::assertEquals(598, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_3_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(3);

        self::assertEquals(837, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_4_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(4);

        self::assertEquals(1076, $total);
    }
}
