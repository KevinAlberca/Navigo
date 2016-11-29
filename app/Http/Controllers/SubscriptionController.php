<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getPlanList() {
        $plans = DB::table('plans')->get();
        return view('subscription.plans', [
            'plans' => $plans,
        ]);
    }

    public function registerUserSubscription($payment_id, $payer_id) {
        return DB::table('billing')->insert([
            'payment_id' => $payment_id,
            'users_id' => Auth::user()->id,
            'cards_id' => 0,
            'payment_mode' => 'paypal',
            'made_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
