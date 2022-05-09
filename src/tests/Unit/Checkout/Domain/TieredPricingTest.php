<?php

namespace App\Tests\Unit\Checkout\Domain;

use App\Checkout\Domain\TieredPricing;
use App\Tests\Unit\Shared\Infrastructure\PhpUnit\UnitTestCase;

class TieredPricingTest extends UnitTestCase
{
    /**
     * @test
     */
    public function it_should_get_price_from_quantity_value_equals_to_1(): void
    {
        $tieredPricing = new TieredPricing(1);

        self::assertEquals(299, $tieredPricing->getPrice());
    }

    /**
     * @test
     */
    public function it_should_get_price_from_quantity_value_equals_to_2(): void
    {
        $tieredPricing = new TieredPricing(2);

        self::assertEquals(299, $tieredPricing->getPrice());
    }

    /**
     * @test
     */
    public function it_should_get_price_from_quantity_value_equals_to_3(): void
    {
        $tieredPricing = new TieredPricing(3);

        self::assertEquals(239, $tieredPricing->getPrice());
    }

    /**
     * @test
     */
    public function it_should_get_price_from_quantity_value_equals_to_24(): void
    {
        $tieredPricing = new TieredPricing(24);

        self::assertEquals(219, $tieredPricing->getPrice());
    }

    /**
     * @test
     */
    public function it_should_calculate_tiered_pricing(): void
    {
        $tieredPricing = new TieredPricing(1);

        self::assertEquals(299, $tieredPricing->calculate());
    }
}
