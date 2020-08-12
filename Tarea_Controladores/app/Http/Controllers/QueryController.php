<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class QueryController extends Controller
{
    public function menu(){
        return view('qb');
    }

    public function exerciseONe(){
        $exOne = DB::table('cities')
            ->select('name')
            ->orderBy('name', 'asc')
            ->get();
        return view('qb.ex_1', ['data'=>$exOne]);
    }

    public function exerciseTwo(){
        $exTwo = DB::table('cities')
            ->select('name')
            ->orderBy('name', 'desc')
            ->get();
        return view('qb.ex_2', ['data'=>$exTwo]);
    }

    public function exerciseThree(){
        $exThree_en = DB::table('countries')
            ->select('name_en')
            ->orderBy('name_en', 'asc')
            ->get();
        $exThree = DB::table('countries')
            ->select('name')
            ->orderBy('name', 'asc')
            ->get();
        return view('qb.ex_3', ['data'=>$exThree_en], ['data2'=>$exThree]);
    }

    public function exerciseFour(){
        $exFour = DB::table('cities')
            ->select('name')
            ->where('name', 'like', 'San %')
            ->get();
        return view('qb.ex_4', ['data'=>$exFour]);
    }

    public function exerciseFive(){
        $exFive = DB::table('countries')
            ->select('id')
            ->where('name', 'Guatemala')
            ->get();
        return view('qb.ex_5', ['data'=>$exFive]);
    }

    public function exerciseSix(){
        $exSix = DB::table('states')
            ->select('name')
            ->where('country_id', '70')
            ->orderBy('name', 'asc')
            ->get();
        return view('qb.ex_6', ['data'=>$exSix]);
    }

    public function exerciseSeven(){
        $exSeven = DB::select('SELECT email, primer_nombre, primer_apellido FROM students WHERE teléfono LIKE ? ', ['6%']);
        return view('qb.ex_7', ['data'=>$exSeven]);
    }

    public function exerciseEight(){
   $exEight = DB::table('students')
            ->where('carrera', 'like', 'Ingeniería%')
            ->count();
        return view('qb.ex_8', ['data'=>$exEight]);
    }

    public function exerciseNine(){
        $exNine = DB::table('students')
            ->select(DB::raw('primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, nota_paes'))
            ->where('carrera', 'Ingeniería en Sistemas')
            ->whereBetween('ano_ingreso', [2000, 2010])
            ->orderBy('nota_paes', 'asc')->get();
        return view('qb.ex_9', ['data'=>$exNine]);
    }

    public function exerciseTen(){
        $exTen = DB::table('students')
            ->avg('nota_paes');
        return view('qb.ex_10', ['data'=>$exTen]);
    }

    public function exerciseEleven(){
        $exEleven = DB::table('students')
            ->avg('nota_admision');
        return view('qb.ex_11', ['data'=>$exEleven]);
    }

    public function exerciseTwelve(){
        $exTwelve = DB::table('students')
            ->select(DB::raw('AVG(nota_paes + nota_admision) as prom'))
            ->groupBy('id')
            ->orderBy('prom', 'asc')
            ->get();
        return view('qb.ex_12', ['data'=>$exTwelve]);
    }

    public function exerciseThirtheen(){
        $exThirtheen = DB::table('students')
        ->select(DB::raw('primer_nombre,primer_apellido,teléfono,nota_paes'))
        ->orderBy('nota_paes', 'desc')
        ->limit(20)
        ->get();

        return view('qb.ex_13', ['data'=>$exThirtheen]);
    }
}
