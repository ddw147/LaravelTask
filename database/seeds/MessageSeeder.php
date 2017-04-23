<?php

use Illuminate\Database\Seeder;


use App\User;
use App\Message;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	Message::truncate();
    	$faker = Faker::create();

    		for ($i=1; $i <=200	;$i++) 
    		{
    			$user = User::where('id',rand(1,3))->first();
    			$user->send_message(rand(1,3),$faker->sentence(3) ,$faker->paragraph());
    		}
    		




    }
}
