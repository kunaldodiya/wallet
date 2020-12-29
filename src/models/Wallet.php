<?php

namespace KD\Wallet\Models;

use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class Wallet extends Model
{
    use HasUuid;

    protected $table = 'wallets';

    protected $fillable = [
        'user_id', 'balance'
    ];

    /**
     * Retrieve all transactions
     */
    public function transactions()
    {
        return $this->hasMany(config('wallet.transaction_model', Transaction::class));
    }

    /**
     * Retrieve owner
     */
    public function user()
    {
        return $this->belongsTo(config('wallet.user_model', \App\User::class));
    }
}
