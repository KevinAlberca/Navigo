<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ParametersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the parameters dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index() {
        return view('parameters.index');
    }

    /**
     * Upload a Picture and set it has Profile Picture
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadPicture(Request $request) {
        if($request->isMethod('post')) {
            if($request->file('picture_to_upload')->isValid()){
                $extension = $request->picture_to_upload->extension();
                $request->picture_to_upload->move('uploads/profile_picture', strtolower(Auth::user()->firstname).'.'.strtolower(Auth::user()->lastname).'.'.$extension);
                return redirect()->action('ParametersController@index');
            } else {
                throw new \Error( trans('errors.file_corrupted') );
            }
        } else {
            throw new \Error( trans('errors.method_post') );
        }
    }

    public function changePassword(Request $request) {
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $new_password_conf = $request->input('new_password_conf');
        if ($new_password !== $new_password_conf) {
            throw new \Error('New password and Confirmation must be the same');
        }

        if(password_hash($old_password, PASSWORD_BCRYPT) == Auth::user()->password) {
            throw new \Error('Old password isn\'t the same as input value');
        }

        $res = DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->update([
                'password' => password_hash($new_password, PASSWORD_BCRYPT)
            ]);

        if($res) {
            return redirect()->action('ParametersController@index');
        }
    }

    public function changeEmailAdress(Request $request) {
        $old_email = $request->input('old_email');
        $new_email = $request->input('new_email');
        $new_email_conf = $request->input('new_email_conf');
        if ($new_email !== $new_email_conf) {
            throw new \Error('New email and Confirmation must be the same');
        }

        if($old_email == Auth::user()->email) {
            $res = DB::table('users')
                ->where('id', '=', Auth::user()->id)
                ->update([
                    'email' => $new_email
                ]);
            return redirect()->action('ParametersController@index');
        } else {
            throw new \Error('The input value for old_email isn\'t the same in database');
        }
    }
}
