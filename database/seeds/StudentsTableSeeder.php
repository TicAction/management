<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students')->delete();
        
        \DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Nathaniel',
                'lastname' => 'Girard',
                'code' => '98f0f',
                'anniversary' => '2001-12-12',
                'created_at' => '2018-08-07 12:10:21',
                'updated_at' => '2018-08-07 12:10:21',
            ),
            1 => 
            array (
                'id' => 3,
                'firstname' => 'Marika',
                'lastname' => 'Girard',
                'code' => '60dce',
                'anniversary' => '2004-06-16',
                'created_at' => '2018-08-07 12:23:17',
                'updated_at' => '2018-08-07 12:23:17',
            ),
        ));
        
        
    }
}