<?php

namespace App\Http\Controllers\algorithms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function binarySearch(Request $request) {
        $searchItem = $request->search_item;
        $list = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25];
        
        $lowIndex = 0;
        $highIndex = count($list) - 1;
        
        $result = -1;
                
        while($lowIndex <= $highIndex) {
            $midIndex = intval(($lowIndex + $highIndex) / 2);
            $guess = $list[$midIndex];
            
            if($guess == $searchItem) {
                $result = $midIndex;
                break;
            } else if($guess > $searchItem) {
                $highIndex = $midIndex - 1;
            } else {
                $lowIndex = $midIndex + 1;
            }
        }
        
        return $result;
    }
}
