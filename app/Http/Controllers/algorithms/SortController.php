<?php

namespace App\Http\Controllers\algorithms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SortController extends Controller {

    public function selectionSort() {
        $array = [5, 3, 6, 2, 10, 2, 3, -5, 78, 0, 7];
        
        $total = count($array);
        $sortedArray = [];

        for ($i = 0; $i < $total; $i++) {
            $smallestIndex = $this->findSmallest($array);
            $sortedArray[] = array_splice($array, $smallestIndex, 1)[0]; //Older PHP use reset function
        }
        
        return $sortedArray;
    }

    private function findSmallest($array) {
        $smallestElement = $array[0];
        $smallestIndex = 0;
        
        for ($j = 1; $j < count($array); $j++) {
            if ($smallestElement > $array[$j]) {
                $smallestElement = $array[$j];
                $smallestIndex = $j;
            }
        }

        return $smallestIndex;
    }

}
