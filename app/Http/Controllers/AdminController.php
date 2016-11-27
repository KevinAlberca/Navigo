<?php

namespace App\Http\Controllers;

use App\Model\Cards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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

    public function index() {
        return view('admin.index');
    }

    public function getCards() {
        $cards = DB::table('cards')->paginate(25);

        return view('admin.cards.index', [
            'cards' => $cards,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Error
     */
    public function searchForCards(Request $request) {
        if($request->isMethod('post')) {
            //N330023456785
            $value = $request->input('look_for');
            $cards = DB::table('cards')
                ->where('id', 'like', '%'.$value.'%')
                ->orWhere('users_id', 'like', '%'.$value.'%')
                ->orWhere('is_active', 'like', '%'.$value.'%')
                ->get();

            return view('admin.cards.list', [
                'result' => $cards,
                'searched_value' => $value,
            ]);
        } else {
            throw new \Error( trans('errors.method_post') );
        }
    }
}
