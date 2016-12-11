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
        if($data != 'cards' && $data != 'users') { die('Must be cards or users'); }

        if($this->_exportFile($data)) {
            return redirect('/admin/export/succes');
        } else {
            throw new \Error('Error when export file');
        }
    }

    private function _exportFile($name_of_entity) {
        $entity = $name_of_entity == 'users' ? \App\Model\User : '\App\Model\Cards';
        Excel::create('Filename', function ($excel) use ($entity){
            // Set the title
            $excel->setTitle('Our new awesome title');

            // Chain the setters
            $excel->setCreator(strtoupper(Auth::user()->lastname).' '.ucfirst(Auth::user()->firstnamerrrr))
                ->setCompany('Navigo');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');
            $excel->sheet('Sheetname', function($sheet) use ($entity) {
                $sheet->fromModel($entity::all());
            });

        })->download('csv');
    }
}
