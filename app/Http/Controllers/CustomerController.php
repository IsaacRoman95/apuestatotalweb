<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Deposit;
use App\Models\Recharge;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function dashboard()
    {
        $user = auth()->user();
        $deposits = Deposit::where('user_id', $user->id)->get();
        $deposits_count = $deposits->count();

        $totalAmount = 0;
        $recharges_count = 0;
        if($deposits_count>0){
            $recharges = $deposits->recharges->get();
            if ($recharges) {
                $totalAmount = $recharges->sum('amount');
            }
            $recharges_count = $recharges->count();
        }


        return view(
            'customer.dashboard',
            [
                'deposits_count' => $deposits_count,
                'recharges_count' =>$recharges_count,
                'totalAmount' => $totalAmount
            ]
        );
    }

    function recharges()
    {
        $user = auth()->user();
        $deposits = Deposit::where('user_id', $user->id)->orderByDesc('created_at') ->get();
        return view('customer.myrecharges', compact('deposits'));
    }

    function chanels()
    {
        $chanels = Channel::where('status', 1)->get();
        return view('customer.chanels', compact('chanels'));
    }
}
