<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [ 'description'];
    public function post()
    {
        return $this->belongsTo(Posts::class);
    }
    public function entries()
    {
        return $this->hasMany(Posts::class, 'user_id', 'id');
    }
}
