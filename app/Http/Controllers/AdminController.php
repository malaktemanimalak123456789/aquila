<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
/*use App\Models\user;*/

class AdminController extends Controller
{ 
    public function listeAdmin(){
        $admin = admin::all();
        return view('liste-admin',['donnees'=>$admin]);
    } 
    
    public function suppAdmin($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin')->with('msg','Suppression faite avec Succès');
    }
    public function getAdminId($id){
        $admin = Admin::find($id);
        return view('modifier-admin',['donnees'=>$admin]);
    } 
    public function modifAdmin(Request $req){
        $admin = Admin::find($req->id);
        $admin->nom = $req->nom;
        $admin->login = $req->login;
        $admin->email = $req->email;
        $admin->password = $req->password;

        $admin->save(); 
        return redirect('/admin')->with('message','Modification faite avec Succès'); }  

    Public function addAdmin(Request $req){
    $admin = new Admin;
    $admin->nom = $req->nom;
    $admin->login = $req->login;
    $admin->email = $req->email;
    $admin->password = $req->password;

    $admin->save() ;
    return redirect('/admin')->with('message','Ajout fait avec Succès');}

}

 
?>