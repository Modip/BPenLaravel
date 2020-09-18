<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCompte extends Model
{
    protected $fillable = array('libelle');
    public static $rules = array('libelle' => 'required|mind:2',);

    public function comptecltmoral()
    {
        return $this->hasMany('App\ComptecltMoral');
    }
    public function comptecltphysique()
    {
        return $this->hasMany('App\ComptecltPhysique');
    }
}
