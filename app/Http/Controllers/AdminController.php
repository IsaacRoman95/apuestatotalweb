<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use App\Models\Recharge;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('administrator.dashboard');
    }

    function customers()
    {
        $customer_rol = Role::where('name', 'customer')->first();
        $users = $customer_rol->users;

        return view('administrator.customers', compact('users'));
    }

    function advisers()
    {
        $adviser_rol = Role::where('name', 'adviser')->first();
        $users = $adviser_rol->users;

        return view('administrator.advisers', compact('users'));
    }

    public function recharges()
    {
        $recharges = Recharge::orderByDesc('created_at')->get();
        return view('administrator.recharges', compact('recharges'));
    }
}
