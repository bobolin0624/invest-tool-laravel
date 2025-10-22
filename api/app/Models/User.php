<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    public $incrementing = false; // UUID 用
    protected $keyType = 'string';

    protected $fillable = [
        'email',
        'google_id',
        'name',
    ];

    public function investments(): HasMany
    {
        return $this->hasMany(Investment::class);
    }

}
