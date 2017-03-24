<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ABCController extends Controller
{
    
    public function __construct() {
        $this->middleware('terminate');
    }
    //
    public function index()
    {
        return "ABC CONTROLLER";
    }
}
