<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
/*use App\Models\User;*/

class ClientController extends Controller
{
   
    public function listeClient()
    {
        $client = client::all();
        return view('liste-client',['donnees'=>$client]);
    }

    public function suppClient($id){
        $client = client::find($id);
        $client->delete();
        return redirect('/client')->with('msg','Suppression faite avec Succès');
    }

    public function getClientId($id){
        $client = Client::find($id);
        return view('modifier-client',['donnees'=>$client]);
    }
    public function modifClient(Request $req){
        $client = Client::find($req->id);
        $client->nom = $req->nom;
        $client->prenom = $req->prenom;
        $client->email = $req->email;
        $client->activite = $req->activite;
        $client->pays = $req->pays;
        $client->password = $req->password;
        $client->tel = $req->tel;

        $client->save(); 
        return redirect('/client')->with('message','Modification faite avec Succès');
    }
   

   Public function addClient(Request $req)
{
    $client = new Client;
    $client->nom = $req->nom;
    $client->prenom = $req->prenom;
    $client->email = $req->email;
    $client->activite = $req->activite;
    $client->pays = $req->pays;
    $client->password = $req->password;
    $client->tel = $req->tel;

    $client->save() ; 
return redirect('/client')->with('message','Ajout fait avec Succès');}


}
?>
