<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getAllBillingForUser() {
        $bill = DB::table('bill')
            ->where('users_id', '=', Auth::user()->id)->get();

        return view('bill.list', [
            'bill' => $bill,
        ]);
    }
}
