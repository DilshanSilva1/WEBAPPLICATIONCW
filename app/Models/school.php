<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{   
    protected $fillable = ['name', 'description', 'location'];
    /** @use HasFactory<\Database\Factories\SchoolFactory> */
    use HasFactory;

    public function developers(){
        return $this->hasMany(Developer::class);
    }
}
