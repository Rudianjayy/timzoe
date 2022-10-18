<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotofasilitas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function fotofasilitas()
    {
        return $this->belongsTo(fotofasilitas::class, 'fotofasilitas_id','id');
    }
}
