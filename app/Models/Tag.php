<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected string $table = 'tags';
    protected bool $guarded = false;
    protected array $fillable = [
        'id',
        'title'
    ];
}