<?php

namespace Tests\Unit;

use cronv\LaravelTaskExample\Examples\CourierTrips;
use PHPUnit\Framework\TestCase;

class CourierTripsTest extends TestCase
{
    /**
     * @test
     */
    public function itCalcRequiredTrips(): void
    {
        $task = new CourierTrips();

        $boxes = [2, 4, 3, 6, 1];
        $weight = 5;

        $this->assertEquals(2, $task->solve($boxes, $weight));

        $boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
        $weight = 6;

        $this->assertEquals(3, $task->solve($boxes, $weight));
    }

    /**
     * @test
     */
    public function itReturnsZeroForNoTrips(): void
    {
        $task = new CourierTrips;

        $boxes = [];
        $weight = 0;

        $this->assertEquals(0, $task->solve($boxes, $weight));
    }
}
