<?php
/**
 * Created by PhpStorm.
 * User: awh
 * Date: 11/12/2016
 * Time: 18:09
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Excel;

class ExportController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.export.index');
    }

    public function export($data = null) {
        if($data == null) { return redirect('/admin/export'); }
        $data_to_export = DB::table($data)->get();

        $this->_exportFile($data_to_export);
        return redirect('/admin/export/succes');
    }

    private function _exportFile($data_to_export) {
        Excel::create('Filename', function ($excel) {
            // Set the title
            $excel->setTitle('Our new awesome title');

            // Chain the setters
            $excel->setCreator(strtoupper(Auth::user()->lastname).' '.ucfirst(Auth::user()->firstnamerrrr))
                ->setCompany('Navigo');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');

            $excel->sheet('Sheetname', function($sheet) {
                $sheet->fromModel(\App\Model\User::all());
            });

        })->download('csv');
    }
}
