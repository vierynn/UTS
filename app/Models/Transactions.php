<?php

namespace App\Models;
use App\Models\Product;
use App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = "transaction";

    protected $fillable = [
        'product_id',
        'user_id',
        'date',
        'quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
