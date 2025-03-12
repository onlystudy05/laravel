<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class epargneController extends Controller
{
    //
    public function index(){
        return view("epargne");
    }
    public function dd($montantObj,$capital){
        

        return  ["une_annee" =>  ($montantObj - $capital) / 12 ,"deux_ans" => ($montantObj - $capital) /24
        ,"trois_ans" => ($montantObj - $capital) / 36];
    }
    public function simuler(Request $request){
        $montantObj = $request["montantObj"];
        $capital = $request['capital'];
        return  ["une_annee" =>  ($montantObj - $capital) / 12 ,"deux_ans" => ($montantObj - $capital) /24
        ,"trois_ans" => ($montantObj - $capital) / 36];
    }
}
