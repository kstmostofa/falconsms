<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $service=Service::where('status', true)->get();
        return view('order.index', compact('service'));
    }

    public function orderHistory()
    {
        return view('order.history');
    }

    public function purchase()
    {
        return view('order.purchase');
    }
}
