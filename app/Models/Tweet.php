<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'user_id'];

    /**
     * Retorna os tweets de um usuário.
     * 1 usuário - N tweets
     * 1 Tweet - 1 usuário
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
