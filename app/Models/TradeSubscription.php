<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeSubscription extends Model
{
    use HasFactory;

    protected $fillable = ['trade_id', 'user_id','amount'];

    // A subscription belongs to one trade
    public function trade()
    {
        return $this->belongsTo(Trade::class);
    }

    // A subscription belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
//     public function marketTrades()
// {
//     return $this->hasMany(MarketTrade::class); // or whatever relation is intended
// }

// In TradeSubscription model
public function marketTrades()
{
    return $this->hasMany(MarketTrade::class, 'subscription_id');
}


}
