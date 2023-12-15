<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'posts_id', 'users_id', 'status', 'massage_user','created_at', 'updated_at'];

    public function getUserID()
    {
        return $this->hasMany(User::class, 'id', 'users_id');
    }
    public function getPostID()
    {
        return $this->hasOne(Post::class);
    }
    public function getTransactionPost()
    {
        return $this->hasMany(Transaction::class);
    }
}
