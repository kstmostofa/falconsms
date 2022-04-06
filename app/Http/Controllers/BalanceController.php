<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {

        $user = User::where('type', 'user')->get();
        return view('balance.index', compact('user'));
    }
}
