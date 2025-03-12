<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    //
    public function index(){
        return view('FormulaireView',["prenom"=>false,"nom"=>" ","sexe"=>" ","email"=>" "]);
    }
    public function Affiche(Request $request){
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $sexe = $request->input('sexe');
        $email = $request->input('email');
        return view('FormulaireView',compact(["nom","prenom","sexe","email"]));
    }
    /// module tp 
    public function indexx (){
        return view('Formdb',["type"=>"add"]);
    }
    public function x ($id){
        $fl=film::find($id);
        return view('Formdb',["type"=>"update","film"=>$fl]);
    }
    public function add (Request $request){
        $titre=$request->input("titre");
        $pays=$request->input("pays");
        $annee=$request->input("annee");
        $genre=$request->input("genre");
        $duree=$request->input("duree");
        $fl=new film();
        $fl->titre=$titre;
        $fl->pays=$pays;
        $fl->annee=$annee;
        $fl->genre=$genre;
        $fl->duree=$duree;
        $fl->save();
        return redirect()->route("showall");
    }
    public function update (Request $request,$id){
        $titre=$request->input("titre");
        $pays=$request->input("pays");
        $annee=$request->input("annee");
        $genre=$request->input("genre");
        $duree=$request->input("duree");
        $fl=film::find($id);
        $fl->titre=$titre;
        $fl->pays=$pays;
        $fl->annee=$annee;
        $fl->genre=$genre;
        $fl->duree=$duree;
        $fl->save();
        return redirect()->route("showall");
    }
    public function showall(){
        $films=film::all();
        return view('Formdb',["type"=>"all","films"=>$films]);
    }
    public function delete ($id){
        $fl=film::find($id);
        $fl->delete();
        return back();
    }
}