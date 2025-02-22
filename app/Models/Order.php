<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity_ordered'
    ];

    protected $guarded = [
        'customer_id'
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
