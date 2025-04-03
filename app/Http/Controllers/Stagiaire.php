<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Stagiaire;

class Stagiaire extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stagiaires=Stagiaire::all();
        return view("stagiaire.index", compact("stagiaires"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("stagiaire.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stagiaire=$request::all();
        $stagiaire = Stagiaire::create();
        
        return redirect()->route('stagiaire.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    // public function show(Film $film)
    // {
    //     return view("Film.show", compact("film"));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("Film.show", compact("film"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stagiaire->nom_complet=$request->nom_complet;
        $stagiaire->genre=$request->genre;
     $stagiaire->date_naissance=$request->date_naissance;
        $stagiaire->note=$request->note;
        $stagiaire->groupe_id=$request->groupe_id;
        $stagiaire->save();
        return redirect()->route('stagiaire.index')->with('success','Le stagiaire a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
// } -->
