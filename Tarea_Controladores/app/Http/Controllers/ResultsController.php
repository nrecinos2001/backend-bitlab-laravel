<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function resultOneView(Request $request){
        return view('Results.exOne_result', ['age'=> $request->age]);
    }
    //Ejercicio 2
    public function resultTwoView(Request $word){
        $capLetters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N',
                       'O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $smaLetters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n',
                       'o','p','q','r','s','t','u','v','w','x','y','z'];
        $wordArray = [];
        for ($i=0; $i < strlen($word->word); $i++) { 
            for ($j=0; $j < count($capLetters); $j++) { 
                if($word->word[$i] == $capLetters[$j] || $word->word[$i] == $smaLetters[$j])
                $wordArray[$i] = $smaLetters[$j] . $capLetters[$j];
            }
        }
        $lenghtArray = count($wordArray);
        return view('Results.exTwo_result', ['word'=> $wordArray, 'long' => $lenghtArray]);
    }

    //Ejercicio 3
    public function resultThreeView(Request $requestNumb){
        return view('Results.exThree_result', ['number'=> $requestNumb->number]);
    }

    //Ejercicio 4
    public function resultFourView(Request $requestNumb){
        $divAnswers = []; $moduleArr = [];
        /* for($i = $requestNumb->number; $i >= 0; $i--){
            $divAnswers[$i] = intval($requestNumb->number/2);
            $moduleArr[$i] = $requestNumb->number%2;
        }*/
        for($i = $requestNumb->number; $i >= 0; $i--){
            //for($j = 0; $j <= $requestNumb->number; $j++){
                $divAnswers[$i] = intval($i/2);
                $moduleArr[$i] = $i%2;
            //}
        }
        return view('Results.exFour_result', ['numArr'=> $divAnswers,
        'moduleArr'=>$moduleArr, 'numb'=>$requestNumb->number]);
    }

    //Ejercicio 5
    public function resultFiveView(Request $ages){
        $agesArr = explode(",", $ages->ages);
        $agesIntArr = [];
        for($i =0; $i < count($agesArr); $i++){
            $agesIntArr[$i] = intval($agesArr[$i]);
        }
        $frecuency = array_count_values($agesIntArr);
        return view('Results.exFive_result', ['ages'=> $agesIntArr, 'frec'=>$frecuency]);
    }

    //Ejercicio 6
    public function resultSixView(Request $request){ 
        $counter = 0;
        $counterLIst = [];
        for($i = 1; $i <= $request->num; $i++){
            $counter = 0;
        for($j = 1; $j <= 100; $j++){
            if($i % $j == 0){
                $counter++;
            }
        $counterList[$i] = $counter;
        }
        }
        return view('Results.exSix_result', ['num'=> $request->num, 'count' => $counterList]);
    }
    public function resultSevenView(Request $num){
        $books = ['Harry Potter', 'Las Cronicas de Narnia', '13 Reasons Why',
                  'Señor Presidente', 'Cien Años de Soledad', 'Cuentos de Barro',
                  'Maze Runner', 'El señor de los Anillos', 'Las mil y una noche',
                  'El Viaje al Centro de la Tierra', 'Sherlock Holmes', 'Maria',
                  'El avion presidencial na desaparecido'];
        $booksToRead = []; $booksNotRec = []; 
        for($i = 0; $i < $num->num; $i++){
            $randN = array_rand($books);
            $booksToRead[$i] = $books[$randN];
            unset($books[$randN]);
            if($i == $num->num-1){
                foreach($books as $book){
                    $booksNotRec[] = $book;
                }
            }
        }
        
        /* for($j=0;$j<count(array_diff($books,$booksToRead));$j++){
            for($k = 0; $k < $books; $k++){
                if ($books[$k] != $booksToRead[$k]) {
                    $booksNotRec[$j] = $books[$k];
                }
            }
        } */
        
        return view('Results.exSeven_result', ['toRead'=>$booksToRead,'b'=>$books, 'notRec'=>$booksNotRec]);
    }

    //Ejercicio 8
    public function resultEightView(Request $year){
        $answer = 0;
        if($year->year%400 == 0){
                $answer = 0;
        }else if($year->year%4 == 0 && $year->year%10!=100){
            $answer = 0;
        }else{
            $answer = 1;
        }
        return view('Results.exEight_result', ['year'=> $year->year, 'answer' => $answer]);
    }
}
