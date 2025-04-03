<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = film::all();
        return view("vliderForm.showall",compact("films"));
    }
    public function create()
    {
        return view("vliderForm.Formulaire");
    }

    /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([ 
            'Titre' => 'required|string', 
            'Pays' => 'required|string', 
            'Annee' => 'required|numeric', 
            'genre'=>'required|string' ,
            "duree"=>'required|numeric|between:20,120',
        ]); 
        $film=new film();
        $film->Titre=$request->input('Titre');
        $film->Pays=$request->input('Pays');
        $film->Annee=$request->input('Annee');
        $film->genre=$request->input('genre');
        $film->duree=$request->input('duree');
        $nomPhoto=null; 
        if(isset($request->photo)){ 
            $nomPhoto = time().'.'.$request->photo->extension(); 
            $request->photo->storeAs('image', $nomPhoto); 
            $film->photo=$nomPhoto ;
        } ;
        $film->save();
        return redirect()->route("film.index")->with("msg",'Le stagiaire a été ajouté avec succès.'); 
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        abort(404);
    }
}
