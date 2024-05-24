<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use App\Models\Recharge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('administrator.dashboard');
    }

    public function customers()
    {
        $customer_rol = Role::where('name', 'customer')->first();
        $users = $customer_rol->users;

        return view('administrator.customers', compact('users'));
    }

    public function advisers()
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


    public function advisersnew()
    {
        return view('administrator.advisersnew');
    }

    public function adviser_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        $adviser = new User();
        $adviser->name = $request->name;
        $adviser->email = $request->email;
        $adviser->email_verified_at = now();
        $adviser->password = Hash::make($request->password);
        $adviser->save();

        $adviser->assignRole('adviser');

        return redirect()->route('admin.advisers')->with('success', 'El asesor se ha creado correctamente.');
    }
}
