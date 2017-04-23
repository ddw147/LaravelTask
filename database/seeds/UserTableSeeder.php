<?php


use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
    	$users = [
    				['name'=>'Dhiraj Wakchaure', 'email'=>'ddw147@gmail.com','password'=>bcrypt('demo') , 'mobile'=>'8275466726'],
    				['name'=>'Demo', 'email'=>'demo@gmail.com','password'=>bcrypt('demo') , 'mobile'=>'8275466725'],
    				['name'=>'test', 'email'=>'test@gmail.com','password'=>bcrypt('demo') , 'mobile'=>'8275466724']
    			 ];

    	User::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
    	foreach ($users as $key => $user) {
    		
    		User::create($user);
    	}
        


    }
}
