<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'user_id',
        'link',
        'file',
    ];

    public function user(){
        return $this->hasMany(App\Models\User);
    }
}

