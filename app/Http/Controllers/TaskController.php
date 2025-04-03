<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index(){
    $taches=[
        ['nom'=>'Acheter du pain','statut'=>'terminé','date'=>'2024-02-01'],
        ['nom'=>'Reviser laravel','statut'=>'en cours','date'=>'2024-02-03'],
        ['nom'=>'faire dusport','statut'=>'à faire','date'=>'2024-02-02'],
    ];
    return view ('index',compact('taches'));
  }
  public function search(Request $request){
    $nom=$request->input('nom');
    $taches=[
        ['nom'=>'Acheter du pain','statut'=>'terminé','date'=>'2024-02-01'],
        ['nom'=>'Reviser laravel','statut'=>'en cours','date'=>'2024-02-03'],
        ['nom'=>'faire dusport','statut'=>'à faire','date'=>'2024-02-02'],
    ];

  }

}
