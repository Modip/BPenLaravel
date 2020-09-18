<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = array('nom', 'region');
    public static $rules = array(
        'nom' => 'required|mind:2',
        'region' => 'required|mind:3'
    );
    public function comptecltmoral()
    {
        return $this->hasMany('App\ComptecltMoral');
    }
    public function comptecltphysique()
    {
        return $this->hasMany('App\ComptecltPhysique');
    }
}
