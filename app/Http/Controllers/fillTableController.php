<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fillTableController extends Controller
{
    function fill(){

        for($i=1; $i<20000; $i++){
            DB::table('example')->insert(
                [
                    'id' => $i, 
                    'col1' => 'exampleTest123',
                    'col2' => 'exampleTest123', 
                    'col3' => 'exampleTest123',  
                    'col4' => 'exampleTest123', 
                    'col5' => 'exampleTest123', 
                    'col6' => 'exampleTest123', 
                    'col7' => 'exampleTest123', 
                    'col8' => 'exampleTest123', 
                    'col9' => 'exampleTest123', 
                    'col10' => 'exampleTest123', 
                    'col11' => 'exampleTest123', 
                    'col12' => 'exampleTest123', 
                    'col13' => 'exampleTest123', 
                    'col14' => 'exampleTest123',
                    
                ]
            );
        }

        return 'Data Created';
    }


    function delete(){
        DB::table('example')->delete();
        return 'deleted';
    }



}
