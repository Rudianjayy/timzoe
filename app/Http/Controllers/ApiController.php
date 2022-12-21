<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class ApiController extends Controller
{
    public function payment_handler(Request $request) {
        $json = json_decode($request->getContent());
        $signature_key = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . 'SB-Mid-server-RcFqJE4B66H7TmdNUajirjjK');

        if($signature_key != $json->signature_key){
            return abort(404);
        }

        // status berhasil
        $order = Payment::where('order_id', $json->order_id)->first();
        // dd($order);
        if($json->transaction_status == 'settlement'){
            return $order->update(['status' => $json->transaction_status]);
        }       
        return true;
    }
    
    public function pembayaran(Request $request) {
        $json = json_decode($request->getContent());
        $signature_key = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . 'SB-Mid-server-RcFqJE4B66H7TmdNUajirjjK');

        if($signature_key != $json->signature_key){
            return abort(404);
        }

        // status berhasil
        $order = Payment::where('order_id', $json->order_id)->first();
        // dd($order);
        if($json->transaction_status == 'settlement'){
            return $order->update(['status' => $json->transaction_status]);
        }
        return true;
    }
}
