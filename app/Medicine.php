<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id'); // Nama model, nama Foreign Key di tabel medicines
    }
}
