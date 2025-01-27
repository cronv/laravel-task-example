<?php

namespace cronv\LaravelTaskExample\Examples;

/**
 * Class CourierTrips
 *
 * Class for calculating the maximum number of trips a courier can make
 * by carrying pairs of boxes that together equal a specified weight.
 *
 * This class provides a method to determine how many pairs of boxes can be
 * formed such that their combined weight matches the weight the courier can carry.
 *
 * @package cronv\LaravelTaskExample\Examples
 */
class CourierTrips
{
    /**
     * Calculates the maximum number of trips the courier can make with the given boxes.
     *
     * This method takes an array of box weights and a maximum weight limit.
     * It counts how many pairs of boxes can be formed that sum up to the specified weight.
     *
     * @param array<int> $boxes An array of integers representing the weights of the boxes.
     * @param int $weight The maximum weight that the courier can carry. Default is 0.
     * @return int Returns the maximum number of trips (pairs of boxes) the courier can make.
     */
    public function solve(array $boxes, int $weight = 0): int
    {
        $count = 0;
        $boxCount = array_count_values($boxes);

        foreach ($boxCount as $boxWeight => $numBoxes) {
            if ($boxWeight > $weight / 2) {
                continue;
            }

            $complementWeight = $weight - $boxWeight;

            if (isset($boxCount[$complementWeight])) {
                if ($boxWeight == $complementWeight) {
                    $pairs = floor($numBoxes / 2);
                    $count += $pairs;
                    continue;
                }
                $pairs = min($numBoxes, $boxCount[$complementWeight]);
                $count += $pairs;

                $boxCount[$boxWeight] -= $pairs;
                $boxCount[$complementWeight] -= $pairs;
            }
        }

        return $count;
    }
}
