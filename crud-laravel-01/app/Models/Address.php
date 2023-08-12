<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;
    protected $fillable =[
        'city',
        'state'
    ];
    //1 endereço pode ter vários clientes, por isso a função deve está no plural.
    public function clients(): HasMany 
    {
        return $this->hasMany(Client::class);
    }
}