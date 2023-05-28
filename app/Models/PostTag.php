<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    protected string $table = 'post_tags';
    protected bool $guarded = false;
    protected array $fillable = [
        'id',
        'post_id',
        'tag_id'
    ];
}