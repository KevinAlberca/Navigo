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

}
