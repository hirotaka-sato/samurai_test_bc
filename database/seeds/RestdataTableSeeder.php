<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp',
        ];
        DB::table('restdata')->insert($param);
        //$restdata = new Restdata;
        //$restdata->timestamps = false;
        //$restdata->fill($param)->save();
        $param = [
            'message' => 'Yahoo Japan',
            'url' => 'https://www.yahoo.co.jp',  
        ];
        DB::table('restdata')->insert($param);
        //$restdata = new Restdata;
        //$restdata->timestamps = false;
        //$restdata->fill($param)->save();
        $param = [
            'message' => 'MSN Japan',
            'url' => 'https://www.msn.com/ja-jp',  
        ];
        DB::table('restdata')->insert($param);
        //$restdata = new Restdata;
        //$restdata->timestamps = false;
        //$restdata->fill($param)->save();
    }
}
