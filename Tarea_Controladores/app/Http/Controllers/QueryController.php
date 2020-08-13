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

    public function exerciseFourteen(){
        $exFourteen = DB::table('students')
            ->select(DB::raw('carrera, avg(nota_admision) as prom'))
            ->groupBy('carrera')
            ->get();
        return view('qb.ex_14', ['data'=>$exFourteen]);
    }

    public function exerciseFifteen(){
        $exFifteen = DB::table('students')
            ->select(DB::raw('ano_ingreso, COUNT(ano_ingreso) as total'))
            ->groupBy('ano_ingreso')
            ->get();
        return view('qb.ex_15', ['data'=>$exFifteen]);
    }

    public function exerciseSixteen(){
        $exSixteen = DB::table('students')
            ->select('primer_nombre')
            ->where('nota_paes', '<', 6)
            ->get();
        return view('qb.ex_16', ['data'=>$exSixteen]);
    }

    public function exerciseSeventeen(){
        $exSeventeen = DB::table('students')
        ->select('primer_nombre')
        ->where('nota_paes', '<', 6)
        ->where('nota_admision', '<', 6)
        ->get();
    return view('qb.ex_17', ['data'=>$exSeventeen]);
    }

    public function exerciseEighteen(){
        $exEigtheen = DB::table('students')
            ->select(DB::raw('carrera, MIN(nota_admision) as nota_admision'))
            ->groupBy('carrera')
            ->orderBy('nota_admision', 'asc')
            ->get();
        return view('qb.ex_18', ['data'=>$exEigtheen]);
    }

    public function exerciseNineteen(){
        $exNineteen = DB::table('students')
            ->select(DB::raw('carrera, MAX(nota_paes) as nota_paes'))
            ->where('nota_paes', '>', 7)
            ->groupBy('carrera')
            ->orderBy('nota_paes', 'asc')
            ->get();
        return view('qb.ex_19', ['data'=>$exNineteen]);
    }

    public function exerciseTwenty(){
        $exTwenty = DB::table('students')
            ->select(DB::raw('*'))
            ->where('primer_apellido', 'like', 'A%')
            ->where('email', 'like', '%gmail.com')
            ->where('ano_ingreso', '<', 2010)
            ->orderBy('primer_apellido', 'desc')
            ->get();
        return view('qb.ex_20', ['data'=>$exTwenty]);
    }

    public function exerciseTOne(){
        $exTOne = DB::table('countries')
            ->select('id')
            ->whereIn('ISO', ['SV', 'GT', 'HN', 'PA', 'CR', 'BZ', 'NI'])
            ->get();
        return view('qb.ex_21', ['data'=>$exTOne]);
    }

    public function exerciseTTwo(){
        $exTTwo = DB::table('states')
        ->select(DB::raw('COUNT(*) as total'))
        ->whereIn('country_id', [4,30,70,90,99,154,159])
        ->get();
    return view('qb.ex_22', ['data'=>$exTTwo]);
    }

    public function exerciseTThree(){
        $exTThree = DB::table('states')
        ->select('id')
        ->where('country_id', 90)
        ->get();
    return view('qb.ex_23', ['data'=>$exTThree]);
    }

    public function exerciseTFour(){
        $exTFour = DB::table('cities')
        ->select(DB::raw('COUNT(*) as totales'))
        ->groupBy('state_id')
        ->whereIn('state_id', [1167,1168,1169,1170,1171,1172,1173,1174,1175,1176,1177,1178,1179,1180])
        ->get();

        return view('qb.ex_24',['data'=>$exTFour]);
    }
    public function exerciseTFive(){
        $exTFive = DB::table('cities')
        ->select(DB::raw('*'))
        ->whereIn('state_id', [1167,1168,1169,1170,1171,1172,1173,1174,1175,1176,1177,1178,1179,1180])
        ->orderBy('state_id', 'asc')
        ->get();

        return view('qb.ex_25',['data'=>$exTFive]);
    }
}
