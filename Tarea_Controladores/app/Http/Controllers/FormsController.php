<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function exerciseOne(){
        return view('Forms.exOne_form');
    }
    public function exerciseTwo(){
        return view('Forms.exTwo_form');
    }
    public function exerciseThree(){
        return view('Forms.exThree_form');
    }
    public function exerciseFour(){
        return view('Forms.exFour_form');
    }
    public function exerciseFive(){
        return view('Forms.exFive_form');
    }
    public function exerciseSix(){
        return view('Forms.exSix_form');
    }
    public function exerciseSeven(){
        return view('Forms.exSeven_form');
    }
    public function exerciseEight(){
        return view('Forms.exEight_form');
    }
}
