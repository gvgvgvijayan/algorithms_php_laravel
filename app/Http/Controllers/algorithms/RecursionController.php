<?php

namespace App\Http\Controllers\algorithms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecursionController extends Controller {

    public function countDown(int $i) {
        echo $i, nl2br(PHP_EOL);

        if ($i <= 0) {
            return;
        } else {
            $this->countDown($i - 1);
        }
    }
    
    public function factorial(int $i) {
        if($i === 1 || $i === 0) {
            return 1;
        } if($i < 0) {
          return 'Invalid input'  ;
        } else {
            return $i * $this->factorial($i - 1);
        }
    }

}
