<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user = auth()->user();
            if ($user->hasRole('admin')) {
                return redirect()->intended(route('admin.dashboard'));
            } elseif ($user->hasRole('customer')) {
                return redirect()->intended(route('customer.dashboard'));
            } elseif ($user->hasRole('adviser')) {
                return redirect()->intended(route('adviser.dashboard'));
            }
        }
    }
}
