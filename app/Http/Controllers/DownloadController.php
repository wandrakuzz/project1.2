<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggest;
use App\User;
use Storage;
use DB;
use Excel;


class DownloadController extends Controller
{
    /**
     *
     */
     public function download($id)
     {
       $path = Suggest::whereId($id)->value('kertas_kerja');

       $download = Storage::url($path);


        return response()->download(public_path($download));
     }

     

     public function getExcel()
     {
         $lists = DB::table('users')
            ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
            ->select('users.*','profiles.*')
            ->get();

            foreach($lists as $list) {
                 $data[] = array(
                    $list->nama_penuh,
                    $list->matric_no,
                    $list->email,
                    $list->gender,
                    $list->kursus,
                    $list->tahun,
                    $list->no_tel,
                );
            }
            // dd($data);
            Excel::create('List',function($excel) use($data){
                $excel->sheet('Sheet 1', function($sheet) use($data)
                {
                    $sheet->fromArray($data,null, 'A1', false, false);
                    $headings = array('Nama', 'No Matrik', 'Email', 'Jantina', 'Kursus', 'Tahun','No Telefon');
                    $sheet->prependRow(1, $headings);
                });
            })->export('xlsx');


        }

}
