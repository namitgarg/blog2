<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamitController extends Controller
{
    //
    public function namit($age,$weight)
    {
        echo"reached";
        return ($age+$weight);
    }
}
