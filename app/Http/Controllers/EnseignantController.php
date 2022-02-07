<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enseignant;

class EnseignantController extends Controller
{
    public function store(Request $request)
    {
        $enseignants  = new enseignant();
        $enseignants->nom = $request->input('nom');
        $enseignants->prenom = $request->input('prenom');
        $enseignants->sexe = $request->input('sexe');
        $enseignants->grade = $request->input('grade');
        $enseignants->discipline = $request->input('discipline');
        $enseignants->email = $request->input('email');
        $enseignants->password = $request->input('password');
        $enseignants->save();
        return response()->json($enseignants); 
        }

    public function update(Request $request,$id)
    {
        enseignant::where('id',$id)
                    ->update(['nom'=>$request->input('nom'),'prenom'=>$request->input('prenom'),'password'=>$request->input('password')]);
    }
    public function delete($id)
    {
        enseignant::destroy($id);
    }
    public function show($id){
        $enseignant = enseignant::find($id);
        return response()->json($enseignant);
    }
}

