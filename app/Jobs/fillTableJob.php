<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;


class fillTableJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        for($i=1; $i<30000; $i++){
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
    }
}
