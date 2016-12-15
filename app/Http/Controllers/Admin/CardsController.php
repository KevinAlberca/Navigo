<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getCards() {
        $cards = DB::table('cards')
            ->orderBy('id')
            ->paginate(50);

        return view('admin.cards.index', [
            'cards' => $cards,
        ]);
    }

    public function verifyWithId(Request $request) {
        if($request->isMethod('post')) {

            $card_id = $request->get('card_id');
            $card = DB::table('cards')->where('id', '=', $card_id)->get();
            $res = [
                'card_id' => $card[0],
                'message' => 'Message !'
            ];
            if($card[0] != null){
                return response()->json($res);
            } else {
                return response()->json([
                   'Card not recognized'
                ]);
            }

        }

        return view('admin.cards.verify');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Error
     */
    public function searchForCards(Request $request) {
        if($request->isMethod('post')) {
            $value = $request->input('look_for');
            $result = DB::table('cards')
                ->where('id', 'like', $value.'%')
                ->get();

            return view('admin.cards.list', [
                'result' => $result,
                'searched_value' => $value,
            ]);
        } else {
            throw new \Error( trans('errors.method_post') );
        }
    }
}
