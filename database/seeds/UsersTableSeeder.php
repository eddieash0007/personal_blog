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
            'name' => 'Edwin Ashie',
            'email' => 'eddash@eddmail.com',
            'password' => bcrypt('password'),
            'admin' =>1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' =>'uploads/avatars/user.png',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquam alias temporibus a ab possimus impedit, repudiandae dolores sequi quod expedita repellendus pariatur rerum molestiae ducimus aut modi nobis. Officia.',
            'facebook' => 'facebook.com',
            'youtube' =>'youtube.com'
            ]);
    }
}
