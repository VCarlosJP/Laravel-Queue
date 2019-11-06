<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\fillTableJob;

class fillTableController extends Controller
{
    function fill(){
    $totalPerInsert = 10000;
    $lastInsert = 1;
    for($iteracion=1;$iteracion<=2;$iteracion++){

            $job = (new fillTableJob($lastInsert,$totalPerInsert*$iteracion))
            ->delay(now()->addSeconds(5));
        
        dispatch($job);
        $lastInsert = $totalPerInsert*$iteracion;
    }


        return 'Server is working...';
    }


    function delete(){
        DB::table('example')->delete();
        return 'deleted';
    }



}
