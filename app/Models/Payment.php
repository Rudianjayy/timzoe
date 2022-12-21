<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';

    protected $fillable = [
        'id_user',
        'id_biaya',
        'status',
        'transaction_id',
        'order_id',
        'gross_amount',
        'payment_type',
        'payment_code',
        'pdf_url',
    ];
    // public function users(){
    //     return $this->belongsTo(User::class,'id_user', 'id');
    // }
     public function biaya(){
         return $this->belongsTo(Biaya::class,'id_biaya', 'id');
     }

     public function users(){
         return $this->belongsTo(User::class,'id_user', 'id');
     }


} 
