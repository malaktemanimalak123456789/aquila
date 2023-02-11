<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employe;


class EmployeController extends Controller
{
    public function listeEmploye()
    {
        $employe = employe::all();
        return view('liste-employe',['donnees'=>$employe]);
    }

    public function suppEmploye($id){
        $employe = Employe::find($id);
        $employe->delete();
        return redirect('/employe')->with('message','Suppression faite avec Succès');
    }

    public function getEmployeId($id){
        $employe = Employe::find($id);
        return view('modifier-employe',['donnees'=>$employe]);
    } 

    public function modifEmploye(Request $req){
        $employe = Employe::find($req->id);
        $employe->nom = $req->nom;
        $employe->login = $req->login;
        $employe->email = $req->email;
        $employe->ad = $req->ad;

        $employe->save(); 
        return redirect('/employe')->with('message','Modification faite avec Succès'); }    

   Public function addEmploye(Request $req)
{
    $employe = new Employe;
    $employe->nom = $req->nom;
    $employe->login = $req->login;
    $employe->email = $req->email;
    $employe->password = $req->password;
    $employe->ad = $req->ad;

    $employe->save() ; 
    return redirect('/employe')->with('message','Ajout fait avec Succès');
}
}
?>