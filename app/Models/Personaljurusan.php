<?php

namespace App\Models;

use App\Models\Jurusan;
use App\Models\Personaljurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personaljurusan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jurusan(){
        return $this->hasMany(Jurusan::class);
    }
}
