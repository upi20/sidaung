<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendudukPendidikanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penduduk_pendidikan')->delete();
        
        
        
    }
}