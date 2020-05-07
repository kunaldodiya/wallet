<?php

namespace KD\Wallet\Models;

use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class Transaction extends Model
{
    use HasUuid;

    protected $table = 'wallet_transactions';

    protected $fillable = [
        'wallet_id', 'user_id', 'transaction_id', 'transaction_type', 'amount', 'status', 'meta'
    ];

    protected $casts = [
        'amount' => 'float',
        'meta' => 'json'
    ];

    /**
     * Retrieve the wallet from this transaction
     */
    public function user()
    {
        return $this->belongsTo(config('wallet.user_model'));
    }

    /**
     * Retrieve the wallet from this transaction
     */
    public function wallet()
    {
        return $this->belongsTo(config('wallet.wallet_model', Wallet::class));
    }
}
