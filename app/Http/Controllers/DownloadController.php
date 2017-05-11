<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggest;
use Storage;

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

}
