<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class QueryController extends Controller
{
    public function exerciseONe(){
        $prueba = DB::table('students')->get();
        
    }
}
