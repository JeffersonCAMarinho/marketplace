<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //exemplo de declaração nome da tabela 
    // protected $table = 'lojas'; 
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
