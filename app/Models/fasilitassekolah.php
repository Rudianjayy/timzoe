<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class fasilitassekolah extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['foto_sampul','foto', 'judul_fasilitas', 'deskripsi'];


    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat(' d F Y');
    }

}
