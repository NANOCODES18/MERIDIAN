<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = ['trader_id', 'minimum', 'maximum', 'average_percentage','fees','investors','nickname'];

    // Each trade belongs to one trader
    public function trader()
    {
        return $this->belongsTo(Trader::class);
    }
}
