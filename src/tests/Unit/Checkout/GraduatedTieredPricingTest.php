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
    public function it_should_works_graduated_tiered_pricing(): void
    {
        $graduatedTieredPricing = new GraduatedTieredPricing();

        $total = $graduatedTieredPricing->total();

        self::assertNull($total);
    }
}
