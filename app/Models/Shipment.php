<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin',
        'destination',
        'status_id',
        'cargo_details',
        'weight',
        'shipping_line_id'
    ];

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function shippingLine() {
        return $this->belongsTo(ShippingLine::class);
    }

}
