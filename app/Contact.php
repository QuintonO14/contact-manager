<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table = 'contacts';

    protected $guarded = array('id');

    protected $fillable = ['user_id','firstname', 'lastname', 'email', 'address', 'phone_number', 'image'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
