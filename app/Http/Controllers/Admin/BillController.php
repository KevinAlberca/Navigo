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

    public function viewBillWithId($bill_id) {
        $bill = DB::table('bill')->where('id', '=', $bill_id)->first();
        if(count($bill)){
            $user = DB::table('users')->where('id', '=', $bill->users_id)->first();
            return view('admin.bill.view', [
                'user' => $user,
                'bill' => $bill
            ]);
        }
        return response()->redirectTo('/admin/bill');
    }
}
