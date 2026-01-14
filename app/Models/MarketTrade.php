<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketTrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_id',
        'symbol',
        'type',
        'tradetype',
        'closing_pnl',
        'entry_price',
        'avg_close_price',
        'closed_volume',
        'opened_at',
        'closed_at',
    ];

    protected $casts = [
        'opened_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    public function subscription()
    {
        return $this->belongsTo(TradeSubscription::class, 'subscription_id');
    }
    
    // In MarketTrade model
public function tradeSubscription()
{
    return $this->belongsTo(TradeSubscription::class, 'subscription_id');
}
}
