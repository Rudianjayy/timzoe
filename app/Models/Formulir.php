<?php

namespace App\Models;

use App\Models\Biaya;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formulir extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function biayass(){
        return $this->belongsTo(Biaya::class,'id_biaya', 'id');
    }

}
 