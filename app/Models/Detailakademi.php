<?php

namespace App\Models;

use App\Models\Akademi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detailakademi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function akademi(){
        return $this->belongsTo(Akademi::class, 'akademis_id', 'id');
    }
}
