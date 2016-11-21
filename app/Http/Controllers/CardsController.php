<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CardsController extends Controller
{
    public function getCardInformations() {
        $cards = DB::table('cards')
                ->where('users_id', '=', Auth::user()->id)
                ->get();

        return view('cards.informations', [
            'cards' => $cards,
        ]);
    }
}
