<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailekstrakulikuler extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ekstrakulikuler(){
        return $this->belongsTo(ekstrakulikuler::class, 'ekstrakulikulers_id', 'id');
    }
}
