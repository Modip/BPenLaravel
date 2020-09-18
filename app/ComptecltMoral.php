<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComptecltMoral extends Model
{
    protected $fillable = array('clientmorals_id', 'user_id', 'agences_id', 'type_comptes_id', 'numerocompte', 'solde', 'clerib', 'frais', 'date');
    public static $rules = array(
        'clientmorals_id'=>'required|integer',
        'user_id'=>'required|bigInteger',
        'agence_id'=>'required|integer',
        'typecompte_id'=>'required|integer',
        'numerocompte' => 'required|bigInteger',
        'clerib' => 'required|mind:3',
        'solde' => 'required|mind:2',
        'frais' => 'required|mind:3',
        'date' => 'required|mind:3'
    );

    public function cltmoral()
    {
        return $this->belongsTo('App\ClientMoral');
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
