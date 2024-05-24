<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Channel;
use App\Models\Deposit;
use App\Models\Recharge;
use App\Models\RechargeModificationHistory;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Rules\UserExistsRule;
use Illuminate\Support\Facades\Storage;

class AdviserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        $customer_rol = Role::where('name', 'customer')->first();
        $customer_count = $customer_rol->users->count();

        $recharge_count = Recharge::where('user_id', $user->id)->count();
        $recharge_modify = RechargeModificationHistory::where('user_id', $user->id)->count();
        $recharge_anulated = Recharge::where('user_id', $user->id)->where('status', 0)->count();

        return view(
            'adviser.dashboard',
            [
                'customer_count' => $customer_count,
                'recharge_count' => $recharge_count,
                'recharge_modify' => $recharge_modify,
                'recharge_anulated' => $recharge_anulated
            ]
        );
    }

    public function recharges()
    {
        $user = auth()->user();
        $recharges = Recharge::where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->get();
        return view('adviser.recharges', compact('recharges'));
    }

    public function create()
    {
        $banks = Bank::all();
        $channels = Channel::all();
        return view('adviser.create', ['banks' => $banks, 'channels' => $channels]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_code' => ['required', 'exists:users,user_code', new UserExistsRule],
            'amount' => 'required|numeric|min:0',
            'bank_id' => 'required|exists:banks,id',
            'channel_id' => 'required|exists:channels,id',
        ], [
            'image.required' => 'Debe seleccionar una imagen.',
            'image.image' => 'El archivo seleccionado debe ser una imagen.',
            'image.mimes' => 'El formato de la imagen debe ser JPEG, PNG, JPG o GIF.',
            'image.max' => 'La imagen no debe superar los 2MB.',
            'user_code.required' => 'Debe ingresar un código de usuario.',
            'user_code.exists' => 'El código de usuario no existe.',
            'amount.required' => 'Debe ingresar un monto.',
            'amount.numeric' => 'El monto debe ser numérico.',
            'amount.min' => 'El monto debe ser mayor o igual a 0.',
        ]);

        $userCode = $request->user_code;
        $folderName = 'users/' . $userCode;

        if (!Storage::exists($folderName)) {
            Storage::makeDirectory($folderName);
        }

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $request->image->storeAs($folderName, $imageName);

        //generando el registro del depósito
        $user_customer = User::where('user_code', $userCode)->first();
        $url = asset('users/' . $userCode . '/' . $imageName);

        $deposit = new Deposit();
        $deposit->user_id = $user_customer->id;
        $deposit->bank_id = $request->bank_id;
        $deposit->url_baucher = $url;
        $deposit->save();

        //generando el registro de la recarga
        $user = auth()->user();

        $recharge = new Recharge();
        $recharge->user_id = $user->id;
        $recharge->deposit_id = $deposit->id;
        $recharge->amount = $request->amount;
        $recharge->channel_id = 1;
        $recharge->status = 1;
        $recharge->save();

        return redirect()->route('adviser.recharges')->with('success', 'Recarga creada exitosamente.');
    }
}
