<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Support\Carbon;
use App\Models\Personaljurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat(' d F Y');
    }

    
    public function personal()
    {
        return $this->belongsTo(Personaljurusan::class, 'personaljurusans_id','id');
    }
}