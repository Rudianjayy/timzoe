<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ekstrakulikuler extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat(' d F Y');
    }
    public function detailekstrakulikuler(){
        return $this->hasMany(Detailekstrakulikuler::class);
    }
}



