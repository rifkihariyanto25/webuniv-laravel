<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'content', 'slug', 'users_id', 'created_at', 'updated_at'];

    public function user()
    {
        // belonggto itu maksudnya user id punya tabel announ tapi dapetnya dari id si user
        return $this->belongsTo(User::class, 'users_id');
    }
}
