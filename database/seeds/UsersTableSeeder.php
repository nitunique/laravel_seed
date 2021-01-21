<?php

use Illuminate\Database\Seeder;
use App\Usermodel;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1000;
        for($j = 1; $j < 1000; $j++){
            factory(Usermodel::class, $count)->create();
        }
    
    }
}
