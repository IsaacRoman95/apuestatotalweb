<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Deposit;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $deposits = Deposit::with('recharge')->where('user_id', $user->id)->get();

        $deposits_count = $deposits->count();

        $totalAmount = $deposits->sum(function ($deposit) {
            return $deposit->recharge->amount;
        });

        $recharges_count = $deposits->sum(function ($deposit) {
            return $deposit->recharge ? 1 : 0;
        });
        
        return view(
            'customer.dashboard',
            [
                'deposits_count' => $deposits_count,
                'recharges_count' => $recharges_count,
                'totalAmount' => $totalAmount
            ]
        );
    }

    public function recharges()
    {
        $user = auth()->user();
        $deposits = Deposit::where('user_id', $user->id)->orderByDesc('created_at')->get();
        return view('customer.myrecharges', compact('deposits'));
    }

    public function chanels()
    {
        $chanels = Channel::where('status', 1)->get();
        return view('customer.chanels', compact('chanels'));
    }
}
