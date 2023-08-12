<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'user_id'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class); //1 venda pertence a 1 empresa
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); //1 vendedor pertence a 1 usuário
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}