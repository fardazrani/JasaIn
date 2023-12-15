<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['id', 'title', 'body', 'slug', 'image', 'price'];
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'post_id');
    }
    public function getTransactionPost()
    {
        return $this->hasMany(Transaction::class);
    }
}