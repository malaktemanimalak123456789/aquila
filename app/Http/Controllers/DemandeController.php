<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\demande;


class DemandeController extends Controller
{
    public function listeDemande()
    {
        $demande = demande::all();
        return view('liste-demande',['donnees'=>$demande]);
    }
    public function suppDemande($id)
    {
        $demande = demande::find($id);
        $demande->delete();
        return redirect('demande');
    }
}
