<?php

namespace App\Http\Controllers;

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
}
