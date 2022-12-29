<?php

use Illuminate\Support\Facades\DB;

function notification(){
    $date = date('Y-m-d');
    $notification=DB::table('orders')
    ->whereNull('orders.deleted_at')
    ->select(DB::raw('COUNT(id) as count'))
    ->whereRaw('CAST(created_at AS DATE) = ?',[$date])
    ->where('confirm','!=','1')
    ->first();
    $noti= $notification->count;
    return $noti;
}
