<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tradersprofilepic', 'email'];

    // One trader can have many trades
    public function trades()
    {
        return $this->hasMany(Trade::class);
    }
}
