<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{    
    public function transactions()
    {
        return $this->hasMany('App\Transaction','buyer_id', 'id'); // Nama model, nama Foreign Key di tabel transactions, nama Primary Key
    }
}
