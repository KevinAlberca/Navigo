<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    //
    public function __construct() {
        $this->middleware('admin');
    }

    public function viewAllBills() {
        $bill = DB::table('bill')->orderBy('id', 'desc')->paginate(100);
        return view('admin.bill.index', [
            'bills' => $bill
        ]);
    }
}
