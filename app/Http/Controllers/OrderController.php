<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        return view('admin.order.list');
    }

    
}
