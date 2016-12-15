<?php
/**
 * Created by PhpStorm.
 * User: awh
 * Date: 15/12/2016
 * Time: 23:43
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index(){
        $this->_getLastTenBill();
        return view('admin.index', [
            'last_bill' => $this->_getLastTenBill(),
            'nb_user' => $this->_getNumberOfUsers(),
            'nb_card' => $this->_getNumberOfCards(),
        ]);
    }

    private function _getLastTenBill() {
        return DB::table('bill')->orderBy('id', 'desc')->limit(10)->get();
    }

    private function _getNumberOfUsers() {
        return DB::table('users')->count();
    }

    private function _getNumberOfCards() {
        return DB::table('cards')->count();
    }
}