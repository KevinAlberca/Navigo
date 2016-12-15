<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function getUsersList() {
        $users = DB::table('users')
            ->orderBy('id')
            ->paginate(50);

        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    public function searchForUsers(Request $request) {
        if($request->isMethod('post')) {
            $value = $request->input('look_for');
            $result = DB::table('users')
                ->where('lastname', 'like', '%'.$value.'%')
                ->orWhere('firstname', 'like', '%'.$value.'%')
                ->orWhere('email', 'like', '%'.$value.'%')
                ->get();

            return view('admin.users.list', [
                'result' => $result,
                'searched_value' => $value,
            ]);
        } else {
            throw new \Error( trans('errors.method_post') );
        }
    }
}
