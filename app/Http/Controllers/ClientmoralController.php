<?php

namespace App\Http\Controllers;
use App\ClientMoral;
use Illuminate\Http\Request;

class ClientmoralController extends Controller
{
    public function add ()
    {
        return view ('clientmoral.add');
    }
    public function getAll ()
    {
        return view ('clientmoral.list');
    }
    public function edit($id)
    {
        return view ('clientmoral.edit');
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
        $clientmoral = new Clientmoral ;
        $clientmoral->nom = $request->nommor;
        $clientmoral->raisonsocial = $request->raisonsocial;
        $clientmoral->adresse = $request->adressemor;
        $clientmoral->telephone = $request->telmor;
        $clientmoral->email = $request->mailmor;
        $clientmoral->login = $request->loginmor;
        $clientmoral->password = $request->passwordmor;
        $result = $clientmoral->save();
        return view ('clientmoral.add', ['confirmation'=>$result] );

    }
}
