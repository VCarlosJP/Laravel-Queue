<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\fillTableJob;

class fillTableController extends Controller
{
    function fill(){
    
    $job = (new fillTableJob())
            ->delay(now()->addSeconds(5));

    dispatch($job);

        return 'Data Created';
    }


    function delete(){
        DB::table('example')->delete();
        return 'deleted';
    }



}
