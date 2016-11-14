<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

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
    public function index() {
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
                $request->picture_to_upload->move('uploads/profile_picture', Auth::user()->firstname.'.'.Auth::user()->lastname.'.'.$extension);
                return redirect()->action('ParametersController@index');
            } else {
                throw new \Error( trans('errors.file_corrupted') );
            }
        } else {
            throw new \Error( trans('errors.method_post') );
        }
    }
}
