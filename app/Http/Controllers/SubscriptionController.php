<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function getPlanList() {
        $plans = DB::table('plans')->get();
        return view('subscription.plans', [
            'plans' => $plans,
        ]);
    }

    public function registerUserSubscription($payment_id = 1, $plan_id = 2, $card_id = null) {
        return DB::table('bill')->insert([
            'payment_id' => $payment_id,
            'users_id' => Auth::user()->id,
            'cards_id' => $card_id == null ? $this->_createCard(Auth::user()->id, $plan_id) : $card_id,
            'payment_mode' => 'paypal',
            'made_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function renewCardWithId($card_id) {
        $plans = DB::table('plans')->get();
        return view('subscription.renew', [
            'plans' => $plans,
            'card_id' => $card_id
        ]);
    }

    private function _createCard($user_id, $plan_id) {
        $card_id = CardsController::generateCardId();
        $duration = DB::table('cards')->where('id', '=', $plan_id)->get();
var_dump($plan_id);
var_dump('Duration : ', $duration);

        DB::table('cards')->insert([
            'id' => $card_id,
            'users_id' => $user_id,
            'subscription_start' => date('Y-m-d H:i:s'),
            'subscription_end' => '',
            'is_active' => true,
        ]);

        return $card_id;
    }
}
