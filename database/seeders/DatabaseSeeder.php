<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user= \App\Models\User::factory()->create([
            'username'=>'makbel116',
            'password'=>"123456",
        ]);
        \App\Models\Item::factory(5)->create([

            'user_id'=>$user->id
        ]);
    }
}
