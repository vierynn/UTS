<?php

namespace App\Models;
use App\Models\Product;
use App\Models\Transactions;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "user";

    protected $fillable = [
        'star'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}
