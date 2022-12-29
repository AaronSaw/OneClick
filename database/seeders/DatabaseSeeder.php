<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            "name"=>"saw kyaw myint",
            'email'=>"sawkyaw@gmail.com",
            'address'=>"Mandalay",
            "password"=>Hash::make("Sawkyaw@777236"),
            "role"=>'1',
         ]);
         
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            "name"=>"Shoon Lae Yee Win",
            'email'=>"shoonlae123@gmail.com",
            'address'=>"Yangon",
            "password"=>Hash::make("Shoonlae123@"),
            "role"=>'0',
         ]);
    }
}
