<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = 'Pizza';
    protected $guarded = [];

    protected $casts = [
        'toppings'=> 'array',

    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
