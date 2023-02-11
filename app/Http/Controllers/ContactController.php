<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function listeContact()
    {
        $contact = contact::all();
        return view('liste-contact',['donnees'=>$contact]);
    }

    public function suppContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('contact');
    }

    public function getContactId($id){
        $contact = Contact::find($id);
        return view('modifier-contact',['donnees'=>$contact]);
    }

    public function modifContact(Request $req){
        $contact = Admin::find($req->id);
        $contact->nom = $req->nom;
        $contact->email = $req->email;
        $contact->sujet = $req->sujet;
        $contact->message = $req->message;

        $contact->save(); 
        return redirect('\contact');
    }
}
