<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table="users";

    public $timestamps=false;

    public function type_users(){
    	return $this->belongsTo('app\type_users','id_type','id');
    }

    public function  orders(){
        return $this->hasMany('app\orders','id_user','id');
    }

}
