<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'original',
        'large',
        'medium',
        'small'
    ];

    public function imageble(){
        return $this->morphTo();
    }
}
