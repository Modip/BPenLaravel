<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComptecltPhysique extends Model
{
    protected $fillable = array('clientphysiques_id', 'user_id', 'agences_id', 'type_comptes_id', 'numerocompte', 'clerib', 'solde', 'date',);
    public static $rules = array(
        'clientphysiques_id'=>'required|integer',
        'user_id'=>'required|bigInteger',
        'agences_id'=>'required|integer',
        'typecomptes_id'=>'required|integer',
        'numerocompte' => 'required|bigInteger',
        'clerib' => 'required|mind:3',
        'solde' => 'required|mind:3',
        'frais' => 'required|mind:3',
        'date' => 'required|mind:3'
    );
    public function cltphysique()
    {
        return $this->belongsTo('App\ClientPhysique');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function typecompte()
    {
        return $this->belongsTo('App\TypeCompte');
    }

    public function agence()
    {
        return $this->belongsTo('App\Agence');
    }
}
