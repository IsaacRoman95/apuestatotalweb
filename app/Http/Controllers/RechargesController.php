<?php

namespace App\Http\Controllers;

use App\Models\User;

class RechargesController extends Controller
{
    function index()
    {
        $users = User::all();
        return view('adviser.recharges', compact('users'));
    }
}
