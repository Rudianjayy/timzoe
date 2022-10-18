<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function judul(){
        return $this->hasMany(fasilitassekolah::class);
    }
}
