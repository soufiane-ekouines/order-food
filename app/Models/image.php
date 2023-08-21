<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    protected $fillable = [
        'src',
        'name',
    ];
    public function commentable()
    {
        return $this->morphTo();
    }
}
