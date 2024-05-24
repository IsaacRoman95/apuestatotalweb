<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = auth()->user();
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('customer')) {
                return redirect()->route('customer.dashboard');
            } elseif ($user->hasRole('adviser')) {
                return redirect()->route('adviser.dashboard');
            }
        }

        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder.');
    }
}
