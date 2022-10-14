<?php

namespace App\Models;

use App\Models\Detailakademi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Akademi extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function detailakademi(){
        return $this->hasMany(Detailakademi::class);
    }
}
