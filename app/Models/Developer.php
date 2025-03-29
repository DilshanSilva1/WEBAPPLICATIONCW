<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = ['name', 'Exp', 'bio','school_id'];
    /** @use HasFactory<\Database\Factories\DeveloperFactory> */
    use HasFactory;

    public function school(){
        return $this->belongsTo(school::class);
    }
    
}
