<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = App\User::create([

   		'name' => 'Ahmed gadallah',
        'email' =>'ahmedgadallah1899@gmail.com',
        'password' => bcrypt('Milan1899'),
        'admin' => 1

    	]);

        App\Profile::create([
        
        'user_id' => $user->id,
        'avatar' => 'uploads/avatars/1',
        'about' =>'some text some text  some text  some text some text php some text  vsome text  some text  some text  some text  some text ',
        'facebook' => 'facebook.com',
        'youtube' => 'youtube.com'
        ]);
        }
}
