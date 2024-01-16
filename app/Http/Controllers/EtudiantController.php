<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

use App\Models\Formateur;
class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allFormateur=Formateur::all();
        $allEtudiant=Etudiant::all();
        return view("all",compact("allFormateur","allEtudiant"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validate the request if needed


    // Create the new resource
    Etudiant::create($request->all());

    // Redirect to the index page or wherever you want to go after storing
    return redirect()->route('etudiant.index');
}


    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {

       return view("edit",compact("etudiant"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
          $etudiant->fill($request->all())->save();
          return redirect()->route('etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiant.index');
    }
}
