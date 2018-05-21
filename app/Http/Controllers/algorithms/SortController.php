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

    private function quickSort(array $a) {
        
        if (count($a) < 2) {
            return $a;
        } else {
            $pivot = $a[0];
            $length = count($a);

            $lesser = [];
            $greater = [];

            for ($i = 1; $i < $length; $i++) {
                if ($a[$i] <= $pivot) {
                    $lesser[] = $a[$i];
                } else if ($a[$i] > $pivot) {
                    $greater[] = $a[$i];
                }
            }

            $result = array_merge($this->quickSort($lesser), [$pivot],
                    $this->quickSort($greater));

            return $result;
        }
    }
    
    public function getQuickSort(Request $request) {
        return $this->quickSort($request->a);
    }

}
