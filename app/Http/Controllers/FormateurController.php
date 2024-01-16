<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("createF");
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validate the request if needed


    // Create the new resource
    Formateur::create($request->all());
    // Redirect to the index page or wherever you want to go after storing
    return redirect()->route('etudiant.index');
}


    /**
     * Display the specified resource.
     */
    public function show(Formateur $formateur)
    {

       return view("edit",compact("formateur"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formateur $formateur)
    {


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formateur $formateur)
    {
          $formateur->fill($request->all())->save();
          return redirect()->route('etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formateur $formateur)
    {
        $formateur->delete();
        return redirect()->route('etudiant.index');
    }
}
