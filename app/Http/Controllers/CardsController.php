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

    public static function generateCardId() {
        $id = 'N';
        $character = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for($i=0; $i < 13; $i++){
            $id .= $character[rand(0, strlen($character)-1)];
        }
        $db_ids = DB::table('cards')->select('id')->distinct()->get();

        if(!in_array($id, $db_ids->toArray())){
	  return $id;
        } else {
            return self::generateCardId();
        }
    }
}
