<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class periodoController extends Controller
{
    public function getPeriodo($num){

        $result = DB::table('disciplinas')->where('periodo', $num)->get();
        $disciplinas = json_decode($result, true);

    	return view('periodo')->with('disciplinas', $disciplinas);
    }
}