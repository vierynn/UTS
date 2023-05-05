<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Transactions;
use App\Models\Users;

class Product extends Model
{
    protected $table = "product";

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }

    public function users()
    {
        return $this->hasMany(Users::class);
    }
}
