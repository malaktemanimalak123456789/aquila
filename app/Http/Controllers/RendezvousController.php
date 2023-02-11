<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\rendezvous;


class RendezvousController extends Controller
{
    public function listeRendezvous()
    {
        $rendezvous = rendezvous::all();
        return view('liste-demande',['donnees'=>$rendezvous]);
    }
    public function suppRendezvous($id)
    {
        $rendezvouses = rendezvous::find($id);
        $rendezvouses->delete();
        return redirect('/rendezvous')->with('msg','Suppression faite avec Succès');
    }
    public function getRendezvousId($id){
        $rendezvous = Rendezvous::find($id);
        return view('modifier-rendezvous',['donnees'=>$rendezvous]);
    }
    public function modifRendezvous(Request $req){
        $rendezvouses = Rendezvous::find($req->id);
        $rendezvouses->title = $req->title;
        $rendezvouses->employe = $req->employe;
        $rendezvouses->prix = $req->prix;

        $rendezvouses->save(); 
        return redirect('/rendezvous')->with('message','Modification faite avec Succès');;
    }




}
