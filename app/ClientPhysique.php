<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientPhysique extends Model
{
    protected $fillable = array('nom', 'prenom', 'adresse', 'telephone', 'cni', 'email', 'login', 'password');
    public static $rules = array(
        'nom' => 'required|mind:2',
        'prenom' => 'required|mind:3',
        'adresse' => 'required|mind:3',
        'telephone' => 'required|mind:9',
        'cni' => 'required|mind:3',
        'email' => 'required|mind:5',
        'login' => 'required|mind:3',
        'password' => 'required|mind:10',
    );

    public function comptecltphysique()
    {
        return $this->hasMany('App\ComptecltPhysique');
    }
}
 