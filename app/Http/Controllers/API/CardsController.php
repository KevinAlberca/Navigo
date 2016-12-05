<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    //
    /**
     * $request->input('card_number') : Number card to check
     * In postman : https://api.navigo.dev/cards/check?card_number={card_number}
     */
    public function checkCard(Request $request) {
        $res = DB::table('cards')->where('id', '=', $request->input('card_number'))->get();
        return $res[0]->is_active;
    }
}
