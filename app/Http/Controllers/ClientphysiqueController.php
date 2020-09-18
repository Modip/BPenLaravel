<?php

namespace App\Http\Controllers;

use App\ClientPhysique;
use Illuminate\Http\Request;

class ClientphysiqueController extends Controller
{
    public function add ()
    {
        return view ('clientphysique.add');
    }

    public function getAll ()
    {
        return view ('clientphysique.edit');
    }
    public function edit($id)
    {
        return view ('clientphysique.list');
    }

    public function update()
    {
        return $this->getAll();
    }

    public function delete($id)
    {
        return $this->getAll();
    }
    public function persist(Request $request)
    {
        $clientphysique = new Clientphysique ;
        $clientphysique->nom = $request->nomph;
        $clientphysique->prenom = $request->prenomph;
        $clientphysique->adresse = $request->adresseph;
        $clientphysique->telephone = $request->telph;
        $clientphysique->cni = $request->ninph;
        $clientphysique->email = $request->emailph;
        $clientphysique->login = $request->loginph;
        $clientphysique->password = $request->passwordph;
        $result = $clientphysique->save();
        return view ('clientphysique.add', ['confirmation'=>$result] );
    
    }
}
