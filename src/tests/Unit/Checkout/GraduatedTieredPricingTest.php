<?php

declare(strict_types=1);

namespace App\Tests\Unit\Checkout;

use App\Checkout\GraduatedTieredPricing;
use App\Checkout\VO\SubscriptionsBeingPurchased;
use App\Tests\Unit\Shared\Infrastructure\PhpUnit\UnitTestCase;

class GraduatedTieredPricingTest extends UnitTestCase
{
    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_1_subscription(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(1));

        self::assertEquals(299, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_2_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(2));

        self::assertEquals(598, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_3_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(3));

        self::assertEquals(837, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_4_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(4));

        self::assertEquals(1076, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_5_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(5));

        self::assertEquals(1315, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_11_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(11));

        self::assertEquals(2729, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_12_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(12));

        self::assertEquals(2948, $total);
    }

    /**
     * @test
     */
    public function it_should_works_graduated_tiered_pricing_for_26_subscriptions(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total(new SubscriptionsBeingPurchased(26));

        self::assertEquals(5994, $total);
    }
}
