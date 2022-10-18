<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class fasilitassekolah extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['foto_sampul','foto', 'fasilitas_id', 'deskripsi'];


    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat(' d F Y');
    }

    public function judulfasilitas()
    {
        return $this->belongsTo(fasilitas::class, 'fasilitas_id','id');
    }


    public function foto(){
        return $this->hasMany(fasilitassekolah::class);
    }
}
