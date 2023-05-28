<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected string $table = 'posts';
    protected bool $guarded = false;
    protected array $fillable = [
        'id',
        'title',
        'content',
        'category_id'
    ];
}