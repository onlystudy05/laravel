<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class calculController extends Controller
{
    // 
    public function index ($par =""){
        return  view('calculView' ,["res"=>$par]);
    }
    public function calcule (Request $request){
            $a = $request->input('n1');
            $b = $request->input('n2');
            $op = $request->input('op');
            $res=0;
            switch($op){
                case '+':
                    $res+=$a+$b;
                    break;
                case '-':
                 $res+=$a-$b;
                 break;
                case '*':
                 $res+=$a*$b;
                 break;
                case '/':
                    if($b!==0){
                        $res+=$a/$b;
                    break;
                    }else{
                        $res="Division par 0 impossible";
                    }
                    
                default:
                 $res;
            };
            return  view('calculView' ,compact("res"));
        }
}
