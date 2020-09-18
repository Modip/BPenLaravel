<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientMoral extends Model
{
    protected $fillable = array('nom', 'adresse', 'raisonsocial', 'telephone', 'email', 'login', 'password');
    public static $rules = array(
        'nom' => 'required|mind:2',
        'adresse' => 'required|mind:3',
        'raisonsocial' => 'required|mind:3',
        'telephone' => 'required|mind:3',
        'email' => 'required|mind:9',
        'login' => 'required|mind:2',
        'password' => 'required|mind:8',
    );

    public function comptecltmoral()
    {
        return $this->hasMany('App\ComptecltMoral');
    }
}
