<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComptecltphysiqueController extends Controller
{   
    public function add ()
    {
        return view ('comptecltphysique.add');
    }

    public function getAll ()
    {
        return view ('comptecltphysique.list');
    }
    public function edit($id)
    {
        return view ('comptecltphysique.edit');
    }

    public function update()
    {
        return $this->getAll();
    }

    public function delete($id)
    {
        return $this->getAll();
    }
}
