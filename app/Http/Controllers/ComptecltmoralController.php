<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComptecltmoralController extends Controller
{
    public function add ()
    {
        return view ('comptecltmoral.add');
    }

    public function getAll ()
    {
        return view ('comptecltmoral.list');
    }
    public function edit($id)
    {
        return view ('comptecltmoral.edit');
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
