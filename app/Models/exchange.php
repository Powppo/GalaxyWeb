<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'item',
        'user_id',
    ];

    public function user(){
        return $this->hasMany(App\Models\User);
    }
}
