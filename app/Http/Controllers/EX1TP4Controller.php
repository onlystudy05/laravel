<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EX1TP4Controller extends Controller
{
    //
    public $notes=["Mohamed Alaoui" =>"16", "Ahmed Bennani" =>"14", "Rachida kich" =>"6", 
    "Aicha Saaoudi" =>"19", "Noura Alaoui" =>"7", "Samar Rhaoussi" =>"13", "Aicha 
    Siraj" =>"10", "Samiha Hakim" =>"09", "Mohamed Rami"=>"17", "Sami Tazi" =>"7", 
    "Noura Tazi" =>"14"] ;
    public function index(){
        $theme="all";
        arsort($this->notes);
        return view('accueil' ,['notes' => $this->notes,"theme"=>$theme]);
    }
    public function stat(){
        $theme="color";
        arsort($this->notes);
        return view('accueil' ,['notes' => $this->notes,"theme"=>$theme]);
    }
    public function Affiche(Request $request){
        $theme="all";
        $prenom = $request->input('prenom');
        $notes=[];
        foreach($this->notes as $Nom=>$note){
            if(str_contains($Nom,$prenom)!=false){
                $notes[$Nom]=$note;  
            }
        }
        return view('accueil' ,['notes' => $notes,"theme"=>$theme]);
    }
    public function decorate(Request $request){
        $theme="decorate";
        
        return view('accueil' ,['notes' => $this->notes,"theme"=>$theme]);
    }
    public function temp(Request $request){
        $theme="all";
        
        return view('accueil' ,['notes' => $this->notes,"theme"=>$theme]);
    }
}
